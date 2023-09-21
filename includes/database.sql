CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usename VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE Admins (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cin INT(8) NOT NULL,
    usename VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE Products (
    reference INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    supplier VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    sold FLOAT,
    description LONGTEXT
);