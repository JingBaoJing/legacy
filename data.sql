create database `itcast_hotel`;
use `itcast_hotel`;
create table `tb_admin`(
    `adminname` varchar(20) not null primary key comment '管理员',
    `password` varchar(20) not null comment '密码'
)default charset=utf8;

create table `tb_guest`(
    `username` varchar(20) not null primary key comment '用户名',
    `password` varchar(20) not null comment '密码',
    `realname` varchar(20) not null comment '真实姓名',
    `id` varchar(25) not null comment '身份证号',
    `phone` varchar(20) not null comment '电话号码',
    `sex` varchar(20) not null comment '性别',
    `roomid` varchar(20) not null comment '房间号'
)default charset=utf8;


create table `tb_hoteluser`(
    `username` varchar(20) not null primary key comment '用户名',
    `password` varchar(20) not null comment '密码'
)default charset=utf8;

create table `tb_order`(
    `orderid` int unsigned not null primary key auto_increment comment '订单号',
    `realname` varchar(20) not null comment '真实姓名',
    `roomid` varchar(20) not null comment '房间号'
)default charset=utf8;

create table `tb_comm`(
    `username` varchar(20) not null primary key comment '用户名',
    `comment` varchar(255) not null comment '评价内容',
    `commtime` timestamp not null comment '评价时间',
    `reply` varchar(255) not null comment '回复'
)default charset=utf8;

create table `tb_feedback`(
    `username` varchar(20) not null primary key comment '用户名',
    `feedback` varchar(255) not null comment '反馈内容',
    `feedtime` timestamp not null comment '反馈时间',
    `reply` varchar(255) not null comment '回复'
)default charset=utf8;

create table `tb_room`(
    `roomid` varchar(20) not null primary key comment '房间号',
    `roomrank` varchar(22) not null comment '房间等级',
    `roomtype` varchar(22) not null comment '房间类型',
    `roomprice` varchar(25) not null comment '房间价格',
    `roomleft` int unsigned not null comment '房间剩余',
    `roombrief` varchar(255) not null comment '房间简介'
)default charset=utf8;