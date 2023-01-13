USE webproject2022;
DROP PROCEDURE Show_Offers_Shop_Marker;

DELIMITER &&  
CREATE PROCEDURE Show_Offers_Shop_Marker (IN in_shop_longitude DECIMAL,IN in_shop_latitude DECIMAL)   
BEGIN

        SELECT  s.id,s.name,
                o.product_id,
                o.product_price,
                o.mesi_timi_day_critiria,
                o.mesi_timi_week_critiria
                o.creation_date
                o.likes,
                o.dislikes,
                o.has_stock,
                o.stock_avail,
                o.creation_date
        FROM 
                Shop as s,
                Offer as o 
        WHERE  ( ((s.latitude=in_shop_latitude) AND (s.longitude=in_shop_longitude))
        AND     (o.shop_id=s.id)                                                        
        );

END &&  
DELIMITER ;

CALL Show_Offers_Shop_Marker ("Basilopoulos");

