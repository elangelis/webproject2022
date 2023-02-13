USE webproject2022;
DROP PROCEDURE IF EXISTS Show_Shops_User_Location;
DELIMITER &&  

CREATE PROCEDURE Show_Shops_User_Location (IN in_latitude VARCHAR(255) ,IN in_longitude VARCHAR(255))   
DECLARE

DECIMAL max_latitude =in_latitude+50;
DECIMAL min_latitude =in_latitude-50;
DECIMAL max_longitude=in_longitude+50;
DECIMAL min_longitude=in_longitude-50;
DECIMAL radius;
DECIMAL x0,y0;

BEGIN

    x0=in_latitude;
    y0=in_longitude;
    radius=ABS(in_latitude)+ABS(in_longitude);

    SELECT id,name,address,description,products,latitude,longitude
    FROM Shop as s
    WHERE (s.latitude >= min_latitude OR  s.latitude <= max_latitude)
    AND (s.longitude <=max_longitude OR  s.longitude >= min_longitude)
    AND ABS(s.latitude-x0)+ABS(s.longitude-y0)<=50
    AND has_Offer=TRUE;
    
END &&  

DELIMITER ;   

CALL Show_Shops_User_Location ("1","1");
