create database attendence_manager;

use attendence_manager;

create table login
(
id int(11) primary key auto_increment,
admin_name varchar(50),
pass varchar(50)
);
insert into login values(1,'admin','admin');

create table teacher
(
id int(11) primary key auto_increment,
teacher_name varchar(50),
pass varchar(50)
);
insert into teacher values(1,'teacher','teacher');
/************************database tables for sem1*********************************/
create table sem1a
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table sem1b
(
roll_no int(2) primary key auto_increment,
name varchar(20)
); 

/************************subject tables for sem1a***********************************/
create table physics_sem1a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1a(roll_no)
);

create table chemistry_sem1a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1a(roll_no)
);

create table math_sem1a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1a(roll_no)
);

create table c_programming_sem1a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1a(roll_no)
);

create table total_sem1a
(
physics int(3),
chemistry int(3),
math int(3),
c_programming int(3)
);
insert into total_sem1a values(0,0,0,0);
/************************subject tables for sem1b***********************************/
create table physics_sem1b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1b(roll_no)
);

create table chemistry_sem1b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1b(roll_no)
);

create table math_sem1b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1b(roll_no)
);

create table c_programming_sem1b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem1b(roll_no)
);

create table total_sem1b
(
physics int(3),
chemistry int(3),
math int(3),
c_programming int(3)
);
insert into total_sem1b values(0,0,0,0);
/******************************database table for sem2***************************/

create table sem2a
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table sem2b
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

/*******************************subject table for sem2a***************************/
create table physics_sem2a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2a(roll_no)
);

create table chemistry_sem2a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2a(roll_no)
);

create table math_sem2a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2a(roll_no)
);

create table c_programming_sem2a
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2a(roll_no)
);

create table total_sem2a
(
physics int(3),
chemistry int(3),
math int(3),
c_programming int(3)
);
insert into total_sem2a values(0,0,0,0);
/*******************************subject table for sem2b***************************/
create table physics_sem2b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2b(roll_no)
);

create table chemistry_sem2b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2b(roll_no)
);

create table math_sem2b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2b(roll_no)
);

create table c_programming_sem2b
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references sem2b(roll_no)
);

create table total_sem2b
(
physics int(3),
chemistry int(3),
math int(3),
c_programming int(3)
);
insert into total_sem2b values(0,0,0,0);

/***********************database table for sem3***********************************/
create table cc3
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table bda3
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table ec3
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

/*******************************subject table for ccsem3***************************/
create table discrete_cc3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc3(roll_no)
);

create table logic_cc3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc3(roll_no)
);

create table ds_cc3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc3(roll_no)
);

create table total_cc3
(
discrete int(3),
logic int(3),
ds int(3)
);
insert into total_cc3 values(0,0,0);
/*******************************subject table for bdasem3***************************/
create table discrete_bda3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda3(roll_no)
);

create table logic_bda3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda3(roll_no)
);

create table ds_bda3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda3(roll_no)
);

create table total_bda3
(
discrete int(3),
logic int(3),
ds int(3)
);
insert into total_bda3 values(0,0,0);

/*******************************subject table for ecsem3***************************/
create table math_ec3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec3(roll_no)
);

create table edc_ec3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec3(roll_no)
);

create table signal_sys_ec3
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec3(roll_no)
);

create table total_ec3
(
math int(3),
edc int(3),
signal_sys int(3)
);
insert into total_ec3 values(0,0,0);

/*************************database table for sem4********************************/
create table cc4
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table bda4
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table ec4
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

/*******************************subject table for ccsem4***************************/
create table cbnst_cc4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc4(roll_no)
);

create table java_cc4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc4(roll_no)
);

create table cc_cc4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc4(roll_no)
);

create table total_cc4
(
cbnst int(3),
java int(3),
cc int(3)
);
insert into total_cc4 values(0,0,0);

/*******************************subject table for bdasem4***************************/
create table cbnst_bda4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda4(roll_no)
);

create table java_bda4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda4(roll_no)
);

create table r_programming_bda4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda4(roll_no)
);

create table total_bda4
(
cbnst int(3),
java int(3),
r_programming int(3)
);
insert into total_bda4 values(0,0,0);

/*******************************subject table for ecsem4***************************/
create table aic_ec4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec4(roll_no)
);

create table ds_ec4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec4(roll_no)
);

create table emft_ec4
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec4(roll_no)
);

create table total_ec4
(
aic int(3),
ds int(3),
emft int(3)
);
insert into total_ec4 values(0,0,0);

/*****************************database table for sem5******************************/
create table cc5
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table bda5
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

create table ec5
(
roll_no int(2) primary key auto_increment,
name varchar(20)
);

/*******************************subject table for ccsem5***************************/
create table daa_cc5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc5(roll_no)
);

create table os_cc5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc5(roll_no)
);

create table dbms_cc5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references cc5(roll_no)
);

create table total_cc5
(
daa int(3),
os int(3),
dbms int(3)
);
insert into total_cc5 values(0,0,0);

/*******************************subject table for bdasem5***************************/
create table daa_bda5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda5(roll_no)
);

create table os_bda5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda5(roll_no)
);

create table dbms_bda5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references bda5(roll_no)
);

create table total_bda5
(
daa int(3),
os int(3),
dbms int(3)
);
insert into total_bda5 values(0,0,0);
/*******************************subject table for ecsem5***************************/
create table micro_controller_ec5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec5(roll_no)
);

create table digicomm_ec5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec5(roll_no)
);

create table antenna_ec5
(
roll_no int(4),
Date DATE,
foreign key(roll_no) references ec5(roll_no)
);

create table total_ec5
(
micro_controller int(3),
digicomm int(3),
antenna int(3)
);
insert into total_ec5 values(0,0,0);
/************************************************************************************/
/*******************************data insert for sem1*********************************/
insert into sem1a(name) values('ram');
insert into sem1a(name) values('ramu');
insert into sem1a(name) values('ramayan');
insert into sem1a(name) values('rajiv');
insert into sem1a(name) values('sam');
insert into sem1a(name) values('samy');
insert into sem1a(name) values('sid');
insert into sem1a(name) values('sidhu');
insert into sem1a(name) values('kapil');
insert into sem1a(name) values('dev');

insert into sem1b(name) values('karan');
insert into sem1b(name) values('gautam');
insert into sem1b(name) values('jeet');
insert into sem1b(name) values('rajiv');
insert into sem1b(name) values('sam');
insert into sem1b(name) values('samy');
insert into sem1b(name) values('sid');
insert into sem1b(name) values('sidhu');
insert into sem1b(name) values('kapil');
insert into sem1b(name) values('dev');

/*******************************data insert for sem2*********************************/
insert into sem2a(name) values('gaurav');
insert into sem2a(name) values('avi');
insert into sem2a(name) values('moin');
insert into sem2a(name) values('vipin');
insert into sem2a(name) values('sam');
insert into sem2a(name) values('samy');
insert into sem2a(name) values('sid');
insert into sem2a(name) values('sidhu');
insert into sem2a(name) values('kapil');
insert into sem2a(name) values('virat');

insert into sem2b(name) values('gauri');
insert into sem2b(name) values('shikhar');
insert into sem2b(name) values('priyanshu');
insert into sem2b(name) values('tanmay');
insert into sem2b(name) values('abdul');
insert into sem2b(name) values('samy');
insert into sem2b(name) values('sid');
insert into sem2b(name) values('sidhu');
insert into sem2b(name) values('kapil');
insert into sem2b(name) values('suresh');

/*******************************data insert for sem3*********************************/
insert into cc3(name) values('gauri');
insert into cc3(name) values('preeti');
insert into cc3(name) values('deepika');
insert into cc3(name) values('anamika');
insert into cc3(name) values('kanchan');
insert into cc3(name) values('samy');
insert into cc3(name) values('sid');
insert into cc3(name) values('sidhu');
insert into cc3(name) values('kapil');
insert into cc3(name) values('ruchika');

insert into bda3(name) values('gauri');
insert into bda3(name) values('preeti');
insert into bda3(name) values('deepika');
insert into bda3(name) values('anamika');
insert into bda3(name) values('kanchan');
insert into bda3(name) values('samy');
insert into bda3(name) values('sid');
insert into bda3(name) values('sidhu');
insert into bda3(name) values('kapil');
insert into bda3(name) values('ruchika');

insert into ec3(name) values('gauri');
insert into ec3(name) values('preeti');
insert into ec3(name) values('deepika');
insert into ec3(name) values('anamika');
insert into ec3(name) values('kanchan');
insert into ec3(name) values('samy');
insert into ec3(name) values('sid');
insert into ec3(name) values('sidhu');
insert into ec3(name) values('kapil');
insert into ec3(name) values('ruchika');

/*******************************data insert for sem4*********************************/
insert into cc4(name) values('yash');
insert into cc4(name) values('shudhanshu');
insert into cc4(name) values('saumik');
insert into cc4(name) values('samyak');
insert into cc4(name) values('ketan');
insert into cc4(name) values('chitransh');
insert into cc4(name) values('sid');
insert into cc4(name) values('sarvesh');
insert into cc4(name) values('kapil');
insert into cc4(name) values('ruchika');

insert into bda4(name) values('sajid');
insert into bda4(name) values('prajjval');
insert into bda4(name) values('anirban');
insert into bda4(name) values('akash');
insert into bda4(name) values('dhruv');
insert into bda4(name) values('shivam');
insert into bda4(name) values('tanmay');
insert into bda4(name) values('mayank');
insert into bda4(name) values('yash');
insert into bda4(name) values('rahul');

insert into ec4(name) values('prajjval');
insert into ec4(name) values('ayushi');
insert into ec4(name) values('divya');
insert into ec4(name) values('prateek');
insert into ec4(name) values('ashutosh');
insert into ec4(name) values('shashi');
insert into ec4(name) values('rajat');
insert into ec4(name) values('ankit');
insert into ec4(name) values('rahul');
insert into ec4(name) values('ruchika');

/*******************************data insert for sem5*********************************/
insert into cc5(name) values('yash');
insert into cc5(name) values('shudhanshu');
insert into cc5(name) values('saumik');
insert into cc5(name) values('samyak');
insert into cc5(name) values('ketan');
insert into cc5(name) values('chitransh');
insert into cc5(name) values('sid');
insert into cc5(name) values('sarvesh');
insert into cc5(name) values('kapil');
insert into cc5(name) values('ruchika');

insert into bda5(name) values('sajid');
insert into bda5(name) values('prajjval');
insert into bda5(name) values('anirban');
insert into bda5(name) values('akash');
insert into bda5(name) values('dhruv');
insert into bda5(name) values('shivam');
insert into bda5(name) values('tanmay');
insert into bda5(name) values('mayank');
insert into bda5(name) values('yash');
insert into bda5(name) values('rahul');

insert into ec5(name) values('prajjval');
insert into ec5(name) values('ayushi');
insert into ec5(name) values('divya');
insert into ec5(name) values('prateek');
insert into ec5(name) values('ashutosh');
insert into ec5(name) values('shashi');
insert into ec5(name) values('rajat');
insert into ec5(name) values('ankit');
insert into ec5(name) values('rahul');
insert into ec5(name) values('ruchika');

/**************************subject Table for all sem*******************************************/
create table subject
(
sub_sem1 varchar(20),
sub_sem2 varchar(20),
sub_cc3 varchar(40),
sub_bda3 varchar(40),
sub_ec3 varchar(40),
sub_cc4 varchar(40),
sub_bda4 varchar(40),
sub_ec4 varchar(40),
sub_cc5 varchar(40),
sub_bda5 varchar(40),
sub_ec5 varchar(40)
);

insert into subject values('Physics','Physics','Discrete' ,'Discrete','Math','CBNST','CBNST','AIC','DAA','DAA','MICRO CONTROLLER');

insert into subject values('Chemistry','Chemistry','Logic','Logic','EDC','JAVA','JAVA','Data Structure','OS','OS','DIGITAL COMMUNICATION');

insert into subject values('Math','Math','Data Structure','Data Structure','Signal System','CC','R Programming','EMFT','DBMS','DBMS','ANTENNA');

insert into subject(sub_sem1,sub_sem2) values('C Programming','C Programming');