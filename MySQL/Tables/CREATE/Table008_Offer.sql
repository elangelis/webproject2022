CREATE TABLE Offer
(
    id INT NOT NULL AUTO_INCREMENT,
    shop_id INT NOT NULL DEFAULT '0',
    shop_name VARCHAR (255) NOT NULL DEFAULT '0',
    product_id INT NOT NULL DEFAULT '0',
    inventory_id INT NOT NULL DEFAULT '0',
    category_id INT NOT NULL DEFAULT '0',
    subcategory_id INT NOT NULL DEFAULT '0',

    stock_avail INT NOT NULL DEFAULT '0',
    has_stock BOOLEAN DEFAULT FALSE,

    creation_date DATE not null,
    expiration_date DATE not null DEFAULT '0',
    creation_user_id INT NOT NULL DEFAULT '0',
    
    likes INT NOT NULL DEFAULT '0',
    dislikes INT NOT NULL DEFAULT '0',
    IsActive BOOLEAN NOT NULL DEFAULT FALSE,

    product_price DECIMAL NOT NULL DEFAULT '0',
    mesi_timi_day DECIMAL NOT NULL DEFAULT '0',
    mesi_timi_week DECIMAL NOT NULL DEFAULT '0',
    mesi_timi_day_critiria BOOLEAN DEFAULT FALSE,
    mesi_timi_week_critiria BOOLEAN DEFAULT FALSE,

    PRIMARY KEY (id,creation_date,IsActive),
    UNIQUE KEY(stock_avail,has_stock),

    CONSTRAINT offer_shop_id
    FOREIGN KEY (shop_id) REFERENCES Shop(id)
    ON UPDATE CASCADE ON DELETE CASCADE,

    CONSTRAINT offer_product_id
    FOREIGN KEY (product_id) REFERENCES Product(id)
    ON UPDATE CASCADE ON DELETE CASCADE,

    CONSTRAINT offer_creation_user_id
    FOREIGN KEY (creation_user_id) REFERENCES User(id)
    ON UPDATE CASCADE ON DELETE CASCADE,



);

