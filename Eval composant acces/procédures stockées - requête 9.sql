DELIMITER |

CREATE PROCEDURE requete9()
BEGIN
   SELECT MAX(orders.OrderDate) AS 'Dernière date de commande'
	FROM customers
	JOIN Orders 
	ON customers.CustomerID = orders.CustomerID
	WHERE customers.CompanyName = 'Du monde entier' ;
END |


DELIMITER ;