USE webproject2022;
DROP PROCEDURE Show_Shops_Marker_Press;
DELIMITER &&  
CREATE PROCEDURE Show_Shops_Marker_Press (IN in_shopname VARCHAR(255))   
BEGIN    

        SELECT  Shop.name AS "Όνομα Καταστήματος",
                Offer.id AS "Προσφορές Καταστήματος",
                Offer.product_id AS "Προϊόν",
                Offer.product_price AS "Τιμή",
                Offer.creation_date AS "Ημερομηνία Καταχώρησης",
                Offer.likes AS "Likes",
                Offer.dislikes AS "Dislikes",
                Inventory.has_stock AS "Απόθεμα ΝΑΙ/ΟΧΙ"
        FROM Shop
        INNER JOIN Offer ON Offer.shop_id = Shop.id
        INNER JOIN Inventory ON Inventory.id = Shop.id
        WHERE Shop.name = in_shopname;

END &&
DELIMITER ;

CALL Show_Shops_Marker_Press ("vasilopoulos");

