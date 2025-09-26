Ecrivez dans le fichier “job11.sql” une requête permettant de sélectionner la somme
des capacités des salles.

SELECT etage, SUM(capacite) AS capacite_totale
FROM salles 
GROUP BY etage
ORDER BY etage;
