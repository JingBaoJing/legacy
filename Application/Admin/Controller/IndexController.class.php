<?php
namespace Admin\Controller;
//后台控制器
class IndexController extends CommonController {
    //后台首页
    public function index() {
        $model1=D('travel');
        $where1=array('placeid'=>'0');
        $placecount=$model1->where($where1)->count();

        $model2=D('goods');
        $where2=array('goodid'=>'0');
        $goodscount=$model2->where($where2)->count();

        $this->assign('placecount', $placecount);
        $this->assign('goodcount', $goodscount);
        $this->display();
    }
}