use webproject2022;

DROP PROCEDURE Calculate_meses_times;

DELIMITER&&
CREATE PROCEDURE Calculate_meses_times (IN in_product_id INTEGER)
DECLARE

current_date=CURDATE();

BEGIN

    SELECT product_price INTO mesi_timi_day,
    FROM Offer
    WHERE product_id = in_product_id
    AND creation_date <= current_date
    AND current_date <=expiration_date <= expiration_date;
    AND IsActive=true;
    
mesi_timi_day=mesi_timi_day/


END&&
DELIMITER;

CALL Calculate_meses_times;