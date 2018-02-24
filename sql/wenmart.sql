create DATABASE wenmart;

use wenmart;

create table categories(
	cat_id int not null auto_increment,
	cat_name text(255) not null,
	primary key (cat_id)
);

insert into categories(cat_name) values('Electronics');
insert into categories(cat_name) values('Fashion');
insert into categories(cat_name) values('Properties');
insert into categories(cat_name) values('Cosmetics');
insert into categories(cat_name) values('Jobs');
insert into categories(cat_name) values('Movies and musics');


create table brands(
	brand_id int not null auto_increment,
	brand_name text(255) not null,
	primary key (brand_id)
);
/* For Electronics */

insert into brands(brand_name) values('Samsung');
insert into brands(brand_name) values('Lenovo');
insert into brands(brand_name) values('Hewlett Packard (HP)');
insert into brands(brand_name) values('Dell');
insert into brands(brand_name) values('Toshiba');
insert into brands(brand_name) values('Nokia');		18

/* For fusion */

insert into brands(brand_name) values('Nike');
insert into brands(brand_name) values('Adidas');
insert into brands(brand_name) values('Gucci');
insert into brands(brand_name) values('Versace');
insert into brands(brand_name) values('Puma');
insert into brands(brand_name) values('Ralf Lauren(POLO)');
insert into brands(brand_name) values('Jeans');
insert into brands(brand_name) values('LaCoste');
insert into brands(brand_name) values('Channel');
insert into brands(brand_name) values('Timberland');
insert into brands(brand_name) values('Tommy Hilfiger');
insert into brands(brand_name) values('Others');



create table products(
	id int not null auto_increment,
	cat_id int not null,
	brand_id int not null,
	product_title text not null,
	product_desc text not null,
	product_price double not null,
	product_image text not null,
	product_keywords text not null,
	primary key (id)
);

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(1,13,'SAMSUNG GALAXY','Samsung galaxy S7 curved edges',3500,'galaxy_s7.jpg','Samsung galaxy S7');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(1,14,'LENOVO THINKPAD','Lenovo thinkpad laptop pro 15.1 inch ',100,'lenovo-laptop-thinkpad-x240-front-1.jpg','LENOVO THINKPAD LAPTOP');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(1,13,'SAMSUNG GALAXY TAB','Samsung galaxy tab 7 16gig internal 1gig RAM',1500,'samsung-galaxy-tab7.jpg','SAMSUNG GALAXY TAB 7');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(1,13,'SAMSUNG GALAXY TAB','Samsung galaxy Tab-Pro 32gig internal 2gig RAM',3000,'samsung_tab_pro.jpg','SAMSUNG GALAXY TAB PRO');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(2,6,'MENS DRESS','Mens cotton dress',50,'dress.jpg','Mens dress cotton');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(2,2,'ADIDAS SHOE WHITE','Adidas White Black For Men and Women',120,'adidas-shoe.jpg','Adidas Men Women Black White');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(2,1,'AIRMAX 2017','Airmax Running shoe for Men',125,'air-max-2017-mens-running-shoe.jpg','Airmax Running shoe for Men 2017');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(2,1,'NIKE PIRATE SHOE','Nike Pirate Kidrobot Shoe',125,'kidrobot-pirate-nike-dunks-Shoes.jpg','Nike Pirate Kidrobot Shoe Dunks');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(2,1,'NIKE 7 SPORTS SHOE','Nike sports Shoe 7 for men',160,'Nike Shoes 7.jpg','Nike sports Shoe 7 for men running');

insert into products(cat_id,brand_id,product_title,product_desc,product_price,product_image,product_keywords)
	values(2,5,'NEW PUMA SNEAKERS','New Puma Sneakers for men',90,'new-puma-sneakers.jpg','New Puma Sneakers for men');

create table users(
	user_id int not null auto_increment,
	username varchar(300) not null,
	email varchar(300) not null,
	password varchar(300) not null,
	mobile varchar(300) not null,
	address_1 varchar(300) not null,
	address_2 varchar(300),
	primary key (user_id)
);



create table cart(
	cart_id int not null auto_increment,
	product_id int not null,
	ip_address varchar(300) not null,
	user_id int not null,
	product_title text(300) not null,
	product_image text(300) not null,
	qty int not null,
	price double not null,
	total_amount double not null,
	primary key (cart_id)
);

INSERT INTO `cart` (`cart_id`, `product_id`, `ip_address`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES 
('1', '1', '0', '1', 'SAMSUNG GALAXY', 'galaxy_s7.jpg', '1', '3500', '3500');



create table confirm_address(
	address_id int not null auto_increment,
	user_id int not null,
	cus_email text(300) not null,
	cus_mobile text(300) not null,
	cus_address text(300) not null,
	delivery_mode text(300) not null,
	payment_method text(300) not null,
	order_ref text(300) not null,
	primary key (address_id)
);

create table confirm_order_product(
	order_id int not null auto_increment,
	user_id int not null,
	product_title text(300) not null,
	product_image text(300) not null,
	product_qty int not null,
	product_price double not null,
	product_total_amount double not null,
	primary key (order_id)
);

INSERT INTO confirm_order_product(user_id,product_title,product_image,product_qty,product_price,product_total_amount) 
	select user_id,product_title,product_image,qty,price,total_amount from cart where user_id=1;