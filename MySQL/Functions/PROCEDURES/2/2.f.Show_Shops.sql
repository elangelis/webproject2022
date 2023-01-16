USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_User_Location_Commit_Offer;
DELIMITER &&  

CREATE PROCEDURE Show_Shops_User_Location_Commit_Offer (IN in_latitude VARCHAR(255) ,IN in_longitude VARCHAR(255))   
DECLARE

DECIMAL max_latitude =in_latitude+50;
DECIMAL min_latitude =in_latitude-50;
DECIMAL max_longitude=in_longitude+50;
DECIMAL min_longitude=in_longitude-50;
DECIMAL absolute_longitude;
DECIMAL absolute_latitude;

BEGIN
    absolute_latitude=ABS(min_latitude)+ABS(max_latitude);
    absolute_longitude=ABS(min_longitude)+ABS(max_longitude);
    

    SELECT id,name,address,description,products,latitude,longitude
    FROM Shop
    WHERE (latitude >= min_latitude OR  latitude <= max_latitude)
    AND (longitude <=max_longitude OR  longitude >= min_longitude)
    AND absolute_latitude<=50
    AND absolute_longitude<=50;
    
END &&  
DELIMITER ;   
CALL Show_Shops_User_Location_Commit_Offer ("1","1");