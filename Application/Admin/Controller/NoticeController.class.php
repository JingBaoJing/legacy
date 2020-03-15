<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class NoticeController extends Controller
{
    //后台登录页
    public function index()
    {
        $model=D('notice');
        $res=$model->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function add(){

        $this->display();
    }

    public function revise(){
        $model=D('notice');
        $id=I('get.id');
        $res=$model->where("id=$id")->select();
        $this->assign('res',$res);
        $this->display();
    }
    public function delete(){
        $model=D('notice');
        $id=I('get.id');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            echo '删除失败';
        }else{
            echo '删除成功';
            ?>
            <a href="__CONTROLLER__/Notice/index">返回</a>
            <?php
        }
    }

}