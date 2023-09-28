CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE Admins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cin INT(8) NOT NULL,
    username VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE Products (
    image LONGTEXT,
    reference INT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    supplier VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    sold FLOAT,
    newprice FLOAT,
    description LONGTEXT
);
CREATE TABLE orders (
    image LONGTEXT,
    reference INT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    supplier VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    sold FLOAT,
    newprice FLOAT,
    description LONGTEXT
);
INSERT INTO products (image, reference, type, name, quantity, supplier, price, sold, newprice, description)
VALUES ('Billiard Cue Rack.jpg', 100001, 'sport', 'Billiard Cue Rack', 20, 'england new billiard fashion', 50.00, NULL, NULL, '48Inch Short Wooden Pool Billiards Stick Snooker Billiard Cue Rack'),
       ('Table Tennis.jpg', 200001, 'sport', 'Table Tennis', 30, 'wembildon eagles', 30.00, NULL,NULL,'Table Tennis Racket Professional Wood Rubber Table Tennis Paddle Sport Equipment'),
       ('Fixed Basketball Goal.jpg', 300001, 'sport', 'Fixed Basketball Goal', 5, 'NBA agancy', 350.00, NULL,NULL,'First Team Legend Dynasty Fixed Height Basketball Goal  Legend Dynasty Dual  SC-Scarlet'),
       ('adidas football.jpg', 400001, 'sport', 'Adidas football', 100, 'Adidas', 50.00, NULL,NULL, 'Adidas match ball republica krasava glider'),
       ('belgian aramith balls.jpg', 100002, 'sport', 'billiard balls', 70, 'Belgian aramith', 40.00, NULL,NULL, 'Belgian aramith billiard balls full collection 16 balls');