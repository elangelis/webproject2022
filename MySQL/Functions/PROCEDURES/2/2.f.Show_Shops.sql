USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_User_Location_Commit_Offer;
DELIMITER &&  

CREATE PROCEDURE Show_Shops_User_Location_Commit_Offer (IN in_latitude VARCHAR(255) ,IN in_longitude VARCHAR(255))   
DECLARE

DECIMAL max_latitude =in_latitude+50;
DECIMAL min_latitude =in_latitude-50;
DECIMAL max_longitude=in_longitude+50;
DECIMAL min_longitude=in_longitude-50;
DECIMAL radius;

BEGIN

    radius=ABS(in_latitude)+ABS(in_latitude);

    SELECT id,name,address,description,products,latitude,longitude
    FROM Shop as s
    WHERE (s.latitude >= min_latitude OR  s.latitude <= max_latitude)
    AND (s.longitude <=max_longitude OR  s.longitude >= min_longitude)
    AND radius<=ABS(s.latitude)+ABS(s.longitude);

END &&  

DELIMITER ;  

CALL Show_Shops_User_Location_Commit_Offer ("1","1");