use webproject2022;

DROP PROCEDURE Calculate_Day_Mesi_Timi;

DELIMITER&&
CREATE PROCEDURE Calculate_Day_Mesi_Timi (IN in_product_id INTEGER)
DECLARE

    DATE current_date=CURDATE();
    INT sum;
    INT mesi_timi_day;
    INT shop_sum;

BEGIN

    SELECT product_price,COUNT(shop_id) INTO sum,shop_sum
    FROM Offer
    WHERE product_id = in_product_id
    AND creation_date <= current_date
    AND current_date <=expiration_date <= expiration_date;
    AND IsActive=true;
    
    mesi_timi_day=sum/shop_sum;



END&&
DELIMITER;

CALL Calculate_Day_Mesi_Timi;


