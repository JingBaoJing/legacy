<?php
namespace Admin\Controller;

class GuestController extends CommonController
{
    //查看用户
    public function index()
    {
        $model=D('users');
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

    public function search(){
        // $orderid=I('get.orderid');
        //$order=D('order');
        //$data=$order->where("orderid=$orderid")->select();
        //$this->assign('orderid',$orderid);
        //$this->assign('data',$data);
        $this->display();

    }
    public function search_ok(){
        $uid=I('get.uid');
        if(!$uid) {
            echo '不存在该顾客';
        }
        $order=D('users');
        $data=$order->where("uid=$uid")->select();
        $this->assign('data',$data);
        $this->display();
    }


}