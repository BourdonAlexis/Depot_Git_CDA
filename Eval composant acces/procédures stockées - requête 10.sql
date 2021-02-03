DELIMITER |

CREATE PROCEDURE requete10(
	In ShippedDate DATETIME,
	In orderDate DATETIME
	)

BEGIN
   SELECT ROUND(AVG(DATEDIFF(ShippedDate,orderDate))) AS 'Délai moyen livraison' 
	FROM orders;
END |

DELIMITER ;