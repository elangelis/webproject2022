USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_User_Location;
DELIMITER &&  

CREATE PROCEDURE Show_Shops_User_Location (IN in_latitude VARCHAR(255) ,IN in_longitude VARCHAR(255))   
BEGIN

    SELECT name,location,id
    FROM Shop
    WHERE latitude = in_latitude AND longitude = in_longitude;

END &&  
DELIMITER ;   
CALL Show_Shops_User_Location ("1","1");
