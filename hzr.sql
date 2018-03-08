/*后台管理员表*/
create table admin(
id int auto_increment primary key,
username varchar(20) not null,
password char(32) not null,
login_time timestamp default current_time,
state varchar(30)--权限
);

/*配置表*/
create table config(
id int auto_increment primary key,
title varchar(50),
keyword varchar(50),
describle varchar(250),
phone varchar(20),
weixin_code varchar(20),
client_id varchar(40),
access_token varchar(40)
);
/*banner图*/
create table banner(
id int auto_increment primary key,
title varchar(30),
link varchar(30),
imagename varchar(30),
state tinyint(2) default 0,
sort tinyint(2) default 0
);
/*单页面*/
create table content(
  id int auto_increment primary key,
  title varchar(30),--标题
  address varchar(30),--地址
  email varchar(30),--邮箱
  phone varchar(15),--电话
  content text,--内容
  type tinyint(2),
  addtime timestamp default current_timestamp

);
/*新闻分类表*/
create table newstypes(
id int auto_increment primary key,
typename varchar(20),
fid int,
fullpath varchar(20),
sort int default 0,
state tinyint(2) default 1,--显示与否
);
/*新闻表*/
create table news(
articleId int auto_increment primary key,--文章id
typeid int,--关联新闻类型表id
title varchar(30),--标题
describle varchar(255),--简介
imagename varchar(30),--图片
lookurl varchar(30),--视频地址
hot int default 0,--首页推荐1，精彩视频2，取消3，首页推荐视频4
content text,--详情
dateandtime timestamp default current_timestamp,--添加时间
sort int default 0,--排序
hit int default 0,--点击率
);
/*新闻详细表*/
create table newslist(//待用
id int auto_increment primary key,
articleid int,
typeid int
);
/*在线报名表*/
create table baoming(
id int auto_increment primary key,
name varchar(20),---姓名
phone varchar(20),---联系方式
content varchar(30),--专业
addtime varchar(30)--报名时间
);
