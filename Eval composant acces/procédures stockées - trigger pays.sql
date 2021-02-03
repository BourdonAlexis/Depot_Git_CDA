DELIMITER |
CREATE TRIGGER verif_pays3 AFTER INSERT ON `Order details`
    FOR EACH ROW 
    BEGIN
    	DECLARE paysproducteur VARCHAR(30); 
    	DECLARE paysclient VARCHAR(30); 
         	SET paysclient = (SELECT Country FROM orders 
				JOIN customers ON orders.CustomerID = customers.CustomerID 
				WHERE orders.OrderID = NEW.OrderID) ;
				 
				SET paysproducteur = (SELECT Country FROM suppliers
				JOIN products ON suppliers.SupplierID = products.SupplierID 
				WHERE products.ProductID = NEW.ProductID);
				if paysproducteur <> paysclient then 
            SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Pays différents';
        
         END if;
    END |
DELIMITER ;

-- On déclare une variable pour le pays du producteur et pour le pays du client
--La variable "paysclient" correspont au pays du client, on selectionne le pays du client dans la table customers via la table "orders" en passant grace à un JOIN (On recupère le pays grace au numéro de commande) on lui indique que l'ID correspont au nouvelle id rentré pour éviter les lignes en doublons et afin que le système comprenne quelle ID traiter.
--On suit la même méthode pour le pays du producteur en récupérent le pays grace au 'productID' de la table "orders" (tout part de la table "orders" car elle fait la liaison entre nos autres tables car il faut une commande pour lier le client au productuer et ainsi insérer les détails de la commande) 
--Ensuite nous comparons nos deux viriables qui indique un message d'erreur si les pays sont différents 

