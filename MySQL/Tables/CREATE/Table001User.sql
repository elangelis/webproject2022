use webproject2022;
DROP TABLE IF EXISTS user;
CREATE TABLE user
(

    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR (255) NOT NULL DEFAULT '',
    password VARCHAR (255) NOT NULL DEFAULT '',
    email VARCHAR (255) NOT NULL DEFAULT '',  

    name VARCHAR (255) NOT NULL DEFAULT '',
    first_name VARCHAR (255) NOT NULL  DEFAULT '',
    last_name VARCHAR (255) NOT NULL DEFAULT '',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,

    isAdmin BOOLEAN NULL DEFAULT FALSE,

    location VARCHAR (255) NOT NULL DEFAULT '',
    latitude DECIMAL  NOT NULL,
    longitude DECIMAL  NOT NULL ,

    month_score INT DEFAULT  NULL DEFAULT '0',
    sum_score INT DEFAULT NULL DEFAULT '0',

    PRIMARY KEY(id,username),
    UNIQUE KEY (email,password)
);
SHOW TABLES;