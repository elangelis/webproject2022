USE webproject2022;

DROP PROCEDURE Token_Bank;


DELIMITER &&  
CREATE PROCEDURE Token_Bank
DECLARE 
    INTEGER UserSum;
    INTEGER Bank_Sum;
    INTEGER Month_Avail;
BEGIN
    SELECT COUNT(*) INTO UserSum
    FROM User;
    Bank_Sum=50*UserSum;
    Month_Avail=Bank_Sum/(80*100);
    INSERT INTO TokenBank(Bank_TOTAL,Bank_AVAIL,User_Count,Token_Date) VALUES (Bank_Sum,Month_Avail,UserSum,CURRENT_TIMESTAMP);
END&&
DELIMITER;


CALL Token_Bank;