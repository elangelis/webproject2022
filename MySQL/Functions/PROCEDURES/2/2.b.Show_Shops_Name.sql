USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_Name;
DELIMITER &&  
CREATE PROCEDURE Show_Shops_Name (IN in_shopname VARCHAR(255))   
BEGIN    

    SELECT * FROM Shop
    WHERE name = in_shopname;

END &&  
DELIMITER ;
CALL Show_Shops_Name("vasilopoulos");
