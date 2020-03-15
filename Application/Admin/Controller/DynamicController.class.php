<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class DynamicController extends Controller
{
//后台登录页
    public function index()
    {
        $model=D('dynamic');
        $where=array('status'=>'1');
        $count=$model->count();
        $Page=new \Think\Page($count,5);
        foreach($where as $key=>$val){
            $Page->parameter[$key]=urlencode($val);
        }
        $Page->lastSuffix=false;
        $Page->setConfig('header','共%TOTAL_PAGE%页，当前是第%NOW_PAGE%页<br>');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %DOWN_PAGE% %END%');
        $show=$Page->show();
        $list=$model->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function revise(){
        $id=I('get.id');
        $data['id']=I('post.id');
        $data['title']=I('post.title');
        $data['content']=I('post.content');
        $newid=$data['id'];
        $dynamic=D('dynamic');
        $guestres=$dynamic->where("id=$id")->save($data);
        $this->display();
    }

    public function reply(){
        $this->display();
    }
    public function delete(){
        $model=D('dynamic');
        $id=I('get.id');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            echo '删除失败';
        }else{
            echo '删除成功';
            ?>
            <a href="__CONTROLLER__/Dynamic/index">返回</a>
            <?php
        }
    }

}