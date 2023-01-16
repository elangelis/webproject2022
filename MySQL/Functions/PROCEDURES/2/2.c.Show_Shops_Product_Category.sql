USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_Product_Category;
DELIMITER &&  
CREATE PROCEDURE Show_Shops_Product_Category (IN in_category VARCHAR(255))   
BEGIN

    SELECT  id,
            name,
            address,
            description,
            products,
            has_Offer,
            latitude,
            longitude,
    FROM Shop AS s
    INNER JOIN Category AS c ON (c.name=in_category)
    INNER JOIN Product AS p ON (p.category_id=Category.id)
    INNER JOIN Offer AS o ON ((o.shop_id=Shop.id) AND (o.product_id=p.id) AND (o.category_id=c.id))
    WHERE has_Offer=true;


END &&  

DELIMITER ;  

CALL Show_Shops_Product_Category("Είδη υγινεινής");