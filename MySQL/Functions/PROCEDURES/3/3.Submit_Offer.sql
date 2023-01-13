USE webproject2022;

DROP PROCEDURE IF EXISTS DropDown_Level_1;
DELIMITER &&  
CREATE PROCEDURE DropDown_Level_1 (IN in_category VARCHAR(255))   
BEGIN

    SELECT id,name,description
    FROM Category AS c
    WHERE c.name=in_category
    
END &&  
DELIMITER ;   
CALL Show_Shops_User_Location_Commit_Offer ("1","1");