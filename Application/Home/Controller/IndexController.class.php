<?php
namespace Home\Controller;
class IndexController extends CommonController {
	//前台首页
	public function index(){
        $data['comm']=M('comm')->select();
        $lst['notice']=M('notice')->select();
        $this->assign($data);
        $this->assign($lst);
        $this->display();
	}
    //关于我们
    public function about(){
        $this->display('about');
    }
    //联系我们
    public function contactus(){
	    if (IS_POST){
            $rst = $this->create('feedback','add');
            if($rst===false){
                $this->error($rst->getError());
            }
            $this->success('反馈成功',U('Index/index'));
            //预定成功后查看订单
        }
	    $this->display();
    }
}
