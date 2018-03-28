CREATE DATABASE PROJECT_CIS485;

CREATE TABLE electronic
(
ele_id INT AUTO_INCREMENT PRIMARY KEY,
ele_img VARCHAR(600) NOT NULL,
ele_name VARCHAR(100) NOT NULL,
ele_price VARCHAR(6) NOT NULL
);

CREATE TABLE toys
(
toy_id INT AUTO_INCREMENT PRIMARY KEY,
toy_img VARCHAR(600) NOT NULL,
toy_name VARCHAR(100) NOT NULL,
toy_price VARCHAR(6) NOT NULL
);

CREATE TABLE videoGame
(
gam_id INT AUTO_INCREMENT PRIMARY KEY,
gam_img VARCHAR(600) NOT NULL,
gam_name VARCHAR(100) NOT NULL,
gam_price VARCHAR(6) NOT NULL
);

CREATE TABLE dvds
(
dvd_id INT AUTO_INCREMENT PRIMARY KEY,
dvd_img VARCHAR(600) NOT NULL,
dvd_name VARCHAR(100) NOT NULL,
dvd_price VARCHAR(6) NOT NULL,
);

CREATE TABLE books
(
book_id INT AUTO_INCREMENT PRIMARY KEY,
book_img VARCHAR(600) NOT NULL,
book_name VARCHAR(100) NOT NULL,
book_price VARCHAR(6) NOT NULL,
);

CREATE TABLE music
(
mus_id INT AUTO_INCREMENT PRIMARY KEY,
mus_img VARCHAR(600) NOT NULL,
mus_name VARCHAR(100) NOT NULL,
mus_price VARCHAR(6) NOT NULL,
);

CREATE TABLE officeSupplies
(
off_id INT AUTO_INCREMENT PRIMARY KEY,
off_img VARCHAR(600) NOT NULL,
off_name VARCHAR(100) NOT NULL,
off_price VARCHAR(6) NOT NULL,
);

CREATE TABLE tools
(
tool_id INT AUTO_INCREMENT PRIMARY KEY,
tool_img VARCHAR(600) NOT NULL,
tool_name VARCHAR(100) NOT NULL,
tool_price VARCHAR(6) NOT NULL,
);

CREATE TABLE rate
(
rat_id INT AUTO_INCREMENT PRIMARY KEY,
rat_name VARCHAR(10) NOT NULL,
rat_message VARCHAR(300) NOT NULL,
rat_date DATE NOT NULL

);

insert into rate values(4,'vee','very nice',now());
