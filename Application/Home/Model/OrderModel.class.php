<?php
namespace Home\Model;
use Think\Model;
class OrderModel extends Model
{
    protected $insertFields = 'name,realname,sex,id,roomtype,roomrank,phone,email,addtime,days,cost,payways,ly';
    protected $updateFields = 'name,realname,sex,id,roomtype,roomrank,phone,email,addtime,days,cost,payways,ly';
    protected $_validate = array(
        array('realname', 'require', '姓名不能为空', 1, '', 1),
        array('realname', '2,20', '姓名位数不合法（2~20位）', 1, 'length', 1),
        array('email', 'email', '邮箱格式不正确', 1, 'regex', 2),
        array('phone', 11, '手机号码格式不正确', 1, 'length', 2),
        array('realname', '/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+$/u', '用户名只能是汉字、字母、数字、下划线。', 1, '', 1),
        array('phone', 'require', '手机号不能为空', 1, '', 2),
        array('addtime', 'require', '入住时间不能为空', 1, '', 2),
        array('days', 'require', '入住天数不能为空', 1, '', 2),
    );
    public function getOrder($name){
        //取出数据
        $data = $this->field(
            'name,realname,sex,id,roomtype,roomrank,email,phone,addtime,days,cost,payways,ly'
        )->where("name='$name'")->select();
        return $data;
    }

}