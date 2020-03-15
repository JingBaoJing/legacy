<?php
namespace Home\Controller;
class ReserveController extends CommonController {
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('User/login'));
		}
	}
    public function roomtype(){
	    $data['room']=D('room')->getList();
	    $this->assign($data);
	    $this->display('reserve');
    }
    public function roomrank(){
        $roomtype=$_GET['roomtype'];
	    $data['roomrank']=D('room')->getRoomrank($roomtype);
	    $this->assign($data);
	    $this->display('roomrank');
    }
    public function room(){
	    $data['room']=D('room')->getList();
	    $this->assign($data);
	    $this->display();
    }
    public function order(){
	    $name=$_GET['name'];
	    $data['order']=D('order')->getOrder($name);
	    $this->assign($data);
	    $this->display();
    }
    public function addorder(){
	    if (IS_POST){
            $rst = $this->create('order','add');
            if($rst===false){
                $this->error($rst->getError());
            }
            $this->success('预订成功',U('Reserve/order'));
            //预定成功后查看订单
        }else {
            $this->display();
        }
    }
    public function orderEdit(){
	    if (IS_POST){
	        $orderid=$this->userInfo['orderid'];
	        $rst=$this->create('order','save',2,"rid=$orderid");
	        if ($rst===false){
	            $this->error('修改失败');
            }
	        $this->redirect('Reserve/order');
	        return;
        }
	    $this->order();
    }
    public function reserve(){
	    $name=$_GET['name'];
        $roomtype=$_GET['roomtype'];
        $roomrank=$_GET['roomrank'];
        $this->assign('name',$name);
        $this->assign('roomtype',$roomtype);
        $this->assign('roomrank', $roomrank);
        if (IS_POST){
            $rst = $this->create('order','add');
            if($rst===false){
                $this->error($rst->getError());
            }
            $this->success('预订成功',U('Index/index'));
            //预定成功后查看订单
        }else {
            $this->display();
        }
    }
}
