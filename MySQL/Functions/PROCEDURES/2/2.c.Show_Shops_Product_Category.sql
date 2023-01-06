USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_Product_Category;
DELIMITER &&  
CREATE PROCEDURE Show_Shops_Product_Category (IN in_categoryname VARCHAR(255))   
BEGIN

DECLARE category_id_current VARCHAR(255);

SELECT Category.id INTO category_id_current FROM Category
WHERE Category.name = in_categoryname;

SELECT  Shop.name AS "Όνομα Καταστήματος",
        Shop.id AS "Προσφορές Καταστήματος",
        Shop.latitude AS "Latitude",
        Shop.longitude AS "Longitude"
FROM Offer
INNER JOIN Shop ON Shop.id = Offer.shop_id
WHERE (Offer.category_id = category_id_current) AND (Offer.has_stock = TRUE);

END &&  
DELIMITER ;  

CALL Show_Shops_Product_Category("KATIGORIA");