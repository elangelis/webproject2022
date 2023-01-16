USE webproject2022;

CALL Show_Offers_Shop_Marker ("Basilopoulos");

DROP PROCEDURE Offer_Evaluation;

DELIMITER &&  
CREATE PROCEDURE Offer_Evaluation (IN in_offer_id INT)   
BEGIN

        SELECT  s.id,
                s.name,
                o.product_id,
                o.product_price,
                o.mesi_timi_day_critiria,
                o.mesi_timi_week_critiria
                o.creation_date
                o.likes,
                o.dislikes,
                o.has_stock,
                o.stock_avail,
                o.creation_date,
                p.photo,
                u.name,
                u.sum_score
        FROM 
                Offer as o 
        INNER JOIN Shop AS s ON (s.id=o.shop_id)
        INNER JOIN Product AS p ON (p.id=o.product_id)
        INNER JOIN User AS u ON (u.id=o.creation_user_id)
        WHERE (o.id=in_offer_id)

END &&  

DELIMITER ;

CALL Show_Offers_Shop_Marker ("Basilopoulos");