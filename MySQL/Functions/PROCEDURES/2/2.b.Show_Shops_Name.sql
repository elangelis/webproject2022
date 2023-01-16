USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_User_Location;
DELIMITER &&  

CREATE PROCEDURE Show_Shops_Based_On_Name (IN in_shop_name VARCHAR(255))   
BEGIN

    SELECT id,name,address,description,products,has_Offer,latitude,longitude
    FROM Shop
    WHERE in_shop_name=name
     
END &&  
DELIMITER ;   

DELIMITER &&  

CREATE PROCEDURE Show_Shops_Based_On_Name_And_Has_Offer (IN in_shop_name VARCHAR(255))   
BEGIN

    SELECT id,name,address,description,products,has_Offer,latitude,longitude
    FROM Shop
    WHERE in_shop_name=name
    AND has_Offer=TRUE;
     
END &&  

DELIMITER ;

CALL Show_Shops_Based_On_Name ("Basilopoulos");

CALL Show_Shops_Based_On_Name_And_Has_Offer ("Basilopoulos");
