CREATE TABLE IF NOT EXISTS Product
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL DEFAULT '',
    category_id INT NOT NULL DEFAULT '0',
    subcategory_id INT NOT NULL DEFAULT '0',
    description TEXT (255) NOT NULL DEFAULT '0',


    PRIMARY KEY(id,name),

    CONSTRAINT product_category_id
    FOREIGN KEY (category_id) REFERENCES Category(id)
    ON UPDATE CASCADE ON DELETE CASCADE,

    CONSTRAINT product_subcategory_id
    FOREIGN KEY (subcategory_id) REFERENCES Subcategory(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);
