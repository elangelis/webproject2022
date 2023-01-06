USE webproject2022;
DROP TABLE IF EXISTS Subcategory;
CREATE TABLE IF NOT EXISTS Subcategory
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL DEFAULT '',
    category_id INT NOT NULL DEFAULT '',
    description TEXT (255) NOT NULL DEFAULT '',

    PRIMARY KEY(id,name)
);

 SHOW TABLES;   
