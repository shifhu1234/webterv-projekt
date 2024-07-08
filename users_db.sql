CREATE DATABASE users_db
CHARACTER SET utf8
COLLATE utf8_general_ci;

USE users_db;


CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
nev VARCHAR(50) NOT null,
email VARCHAR(100) NOT null,
jelszo VARCHAR(100) NOT null,
szuletesiDatum DATE NOT null,
nem VARCHAR(100) NOT null,
kep VARCHAR(100) NOT null
);