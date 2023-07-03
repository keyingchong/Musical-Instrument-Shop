CREATE TABLE users (
    id  INT(11) NOT NULL AUTO_INCREMENT,
    email   VARCHAR(100) NOT NULL,
    password    VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
);