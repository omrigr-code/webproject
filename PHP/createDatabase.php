<?php

require_once "startup.php";

$database->execute("CREATE TABLE IF NOT EXISTS users (
    id INTEGER NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    sex VARCHAR(6) NOT NULL,
    age INTEGER NOT NULL,
    PRIMARY KEY (id)
);");

$database->execute("CREATE TABLE IF NOT EXISTS tips (
    id int NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    photo TEXT NOT NULL,
    score INTEGER NOT NULL,
    PRIMARY KEY (id)
);");

$database->execute("CREATE TABLE IF NOT EXISTS reviews (
    id int NOT NULL AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    tip_id INTEGER NOT NULL,
    score INTEGER NOT NULL,
    review TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (tip_id) REFERENCES tips(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);");

$database->execute("CREATE TABLE IF NOT EXISTS recipes (
    id int NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);");

$database->execute("CREATE TABLE IF NOT EXISTS contact (
    id INTEGER NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    subject TEXT NOT NULL,
    PRIMARY KEY (id)
);");

echo "CREATED TABLES";
