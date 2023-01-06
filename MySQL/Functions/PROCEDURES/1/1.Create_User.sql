USE webproject2022;
DROP PROCEDURE IF EXISTS User_creation;
DELIMITER &&  
CREATE PROCEDURE User_creation (IN in_username VARCHAR(255),IN in_password VARCHAR(255),IN in_email VARCHAR(255))   
BEGIN
    INSERT INTO User(username,password,email)
    VALUES (in_username,in_password,in_email);
END &&  
DELIMITER ;   
CALL User_creation("ilias","1996","elangelis2@yahoo.gr");
SELECT * FROM User;