create database musiclib;
use musiclib;

create table user_details(
Name varchar(50),
Username varchar(50),
Password varchar(50),
primary key (Username) 
);
select * from user_details;

create table album(
Song_Title varchar(50),
Singer varchar(50),
Genre varchar(50),
myfile varchar(100),
primary key(myfile)
);

select * from album;
delete from album where myfile='/var/www/prateekmvc.com/html/public/songs/Kesariya.mp3';

