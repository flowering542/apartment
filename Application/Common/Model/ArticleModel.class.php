<?php
/**
 * Project: thinkphp-inaction
 * User: xialei
 * Date: 2016/9/28 0028
 * Time: 11:37
 */

namespace Common\Model;

use Think\Exception;
use Think\Model;
use Think\Upload;

class ArticleModel extends Model{

    public $pk = 'articleId';
    public $_validate = array(
        array('aTitle', 'require', '文章标题不能为空'),
        array('aContent', 'require', '文章内容不能为空'),
    );

    public $_auto = array(
        array('aTime', 'getNowAsString', self::MODEL_BOTH, 'function'),
        array('isnav', 'setEnabled', self::MODEL_BOTH, 'callback'),
        array('hits', 'setHits', self::MODEL_INSERT, 'callback'),
    );
    
    public function setHits(){
    	 return 0;
    }

    public function setEnabled(){

        if (empty($_POST['isnav']))	{
            return 0;
        } else {
            return 1;
        }
    }

    /**
     * 上传文章图片
     * @param  无
     * @return String
     */
    public function uploadFile(){

        $upload = new Upload();
        $filePath = "./Public/Upload/";
        $fileDir = "images";
        if(!file_exists($filePath)){
            mkdir($filePath);
        }
        if(!file_exists($filePath.$fileDir)){
            mkdir($filePath.$fileDir);
        }
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg','gif','png','jpeg');
        $upload->rootPath = "./Public/Upload/$fileDir/";
        $upload->autoSub = true;
        $upload->subName = array('date','Ymd');
        $info = $upload->upload();
         if(!$info){
                throw new Exception($upload->getError());
          }
          else{
          	 $fpath =  "/Upload/".$fileDir."/".$info['myfile']['savepath'].$info['myfile']['savename'];
          	 return $fpath;
          }
    }

     /**
     * 编辑|添加文章
     * @param array $data
     * @param null $id
     * @throws Exception
     */
    public function post(array $data, $id = null){
 
        //添加处理
        if ($id === null) {
            if (!$this->add($data)) {
                throw new Exception('添加失败');
            }
        } else {
            if ($this->where(array('articleId' => $id))->save($data) === false) {
                throw new Exception('编辑失败');
            }
        }
    }

     /**
     * 得到列表数组 总数据条数 当前分页
     * @param String $str
     * @param int $num=10
     * @param int $page
     * @throws Exception
     */
     public function getList($str,$num=10,$page=1){
         //总条数
         $count = $this->where(array('category'=>$str))->count();
         $list = $this->field('articleId,aTitle,aTime,author,source')->where(array('category'=>$str))->page($page,$num)->order('aTime desc')->select();
         $pageCount = ceil($count/$num);  if($page>$pageCount) $page=1;   //防止出现list为空的情况

         return [$pageCount,$page,$list,$count];

     }
     
      /**
     * 得到列表数组 总数据条数 当前分页
     * @param String $str
     * @param int $num=10
     * @param int $page
     * @throws Exception
     */
     public function getSubList($str,$num=10,$page=1){
         //总条数
        $data['_string'] = $str;
         $count = $this->where($data)->count();
         $list = $this->field('articleId,aTitle,aTime,author,source')->where($data)->page($page,$num)->order('aTime desc')->select();
         $pageCount = ceil($count/$num);  if($page>$pageCount) $page=1;   //防止出现list为空的情况

         return [$pageCount,$page,$list,$count];

     }

     /**
     * 得到限制条数的列表数组 无子列表
     * @param String $str
     * @param int $num=10
     * @throws Exception
     */
     public function getLimit1($str,$num=7){
          $data = $this->field('articleId,aTitle,category')->where(array('category'=>$str))->limit($num)->order('aTime desc')->select();
          return $data;
     }

     /**
     * 得到限制条数的列表数组 有子列表
     * @param String $str
     * @param int $num=10
     * @throws Exception
     */
     public function getLimit2($str,$num=7){
          $condition['_string'] = $str;
          $data = $this->field('articleId,aTitle,category')->where($condition)->limit($num)->order('aTime desc')->select();
          return $data;
     }

      /**
     * 得到限制条数的新闻图片列表数组 
     * @param String $str
     * @param int $num=10
     * @throws Exception
     */
     public function getLimit3($str,$num=7){
          $condition['_string'] = $str;
          $data = $this->field('articleId,aTitle,image,category')->where($condition)->limit($num)->order('aTime desc')->select();
          return $data;
     }


    /**
     * 查看帖子
     * @param $id
     * @param bool $addViews
     * @return mixed
     * @throws Exception
     */
    public function view($id, $addViews = true){

        if ($addViews) {
            $user = session('user');
            if (empty($user)) {
                $key = get_client_ip(1);
            } else {
                $key = $user['username'];
            }
            $this->addViews($id, $key);
        }
        $data = $this->find($id);
        if (empty($data)) {
            throw new Exception('文章不存在');
        }
        return $data;
    }

    /**
     * 添加游览次数
     * @param $id
     * @param $param
     */
    private function addViews($id, $param){
        $cacheKey = $id . $param;
        $cache = S($cacheKey);
        if (!$cache) {
            $this->where(array('articleId' => $id))->setInc('hits');
            S($cacheKey, 1, 3600);
        }
    }

}