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
    reference INT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    supplier VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    sold FLOAT,
    newprice FLOAT NOT NULL,
    description LONGTEXT
);
CREATE TABLE orders (
    reference INT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    supplier VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    sold FLOAT,
    newprice FLOAT NOT NULL,
    description LONGTEXT
);
INSERT INTO 