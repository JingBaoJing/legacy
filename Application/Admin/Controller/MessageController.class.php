<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class MessageController extends Controller
{
    //后台登录页
    public function index()
    {
        $model=D('message');
        $res=$model->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function check(){
        $this->display();
    }

    public function reply(){
        $this->display();
    }
    public function delete(){
        $model=D('message');
        $id=I('getdses.id');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            echo '删除失败';
        }elseif ($res===0){
            echo '要删除的数据不存在';
        }else{
            echo '删除成功';
            ?>
            <a href="__CONTROLLER__/Message/index">返回</a>
<?php
        }
    }

}