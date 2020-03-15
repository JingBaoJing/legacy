<?php
namespace Home\Model;
use Think\Model;
class RoomModel extends Model {
    /*获得房间表中数据*/
    public function getList(){
        $data=$this->select();
        return $data;
    }
    public function getRoomrank($roomtype){
        $data=$this->field(
            'roomtype,roomrank,roomprice,roomleft,roombrief'
        )->where("roomtype=$roomtype")->select();
        return $data;
    }
}