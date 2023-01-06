       use webproject2022;
       
       SELECT  Shop.name AS "Onoma Katastimatos",
                Offer.id AS "Prosfores Katastimatos",
                Offer.product_id AS "Proion",
                Offer.product_price AS "timi",
                Offer.creation_date AS "Imerominia Kataxwrisis",
                Offer.likes AS "Likes",
                Offer.dislikes AS "Dislikes",
                Inventory.has_stock AS "Apothema"
        FROM Shop
        INNER JOIN Offer ON Offer.id = Shop.id
        INNER JOIN Inventory ON Inventory.id = Shop.id
        WHERE Shop.name = "vasilopoulos";
