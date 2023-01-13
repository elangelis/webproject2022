USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_User_Location_Commit_Offer;
DELIMITER &&  

CREATE PROCEDURE Show_Shops_User_Location_Commit_Offer (IN in_latitude VARCHAR(255) ,IN in_longitude VARCHAR(255))   
DECLARE

DECIMAL max_latitude =in_latitude+50;
DECIMAL min_latitude =in_latitude-50;
DECIMAL max_longitude=in_longitude+50;
DECIMAL min_longitude=in_longitude-50;

BEGIN

    SELECT id,name,address,description,products,latitude,longitude
    FROM Shop
    WHERE (latitude >= min_latitude OR  latitude <= max_latitude)
    AND (longitude <=max_longitude OR  longitude >= min_longitude)
    
END &&  
DELIMITER ;   
CALL Show_Shops_User_Location_Commit_Offer ("1","1");