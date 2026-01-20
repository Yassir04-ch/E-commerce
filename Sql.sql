CREATE DATABASE MvcDatabase;
USE MvcDatabase;

CREATE TABLE users(
id INT PRIMARY KEY AUTO_INCREMENT,
firstname VARCHAR(100),
lastname VARCHAR(100),
email VARCHAR(150),
passsword VARCHAR(250),
role VARCHAR(50)
)ENGINE = INNODB;

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(100),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    client_id INT,
    orderitem_id INT,
    FOREIGN KEY (client_id) REFERENCES users(id)
 ) ENGINE=INNODB;

CREATE TABLE category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100)
 ) ENGINE=INNODB;

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    description VARCHAR(100),
    price DECIMAL,
    image VARCHAR(200),
    strock INT,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(id)
 ) ENGINE=INNODB;

CREATE TABLE order_item (
    id INT PRIMARY KEY AUTO_INCREMENT,
    price DECIMAL,
    quantity INT,
    product_id INT,
    order_id INT,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
 ) ENGINE=INNODB;