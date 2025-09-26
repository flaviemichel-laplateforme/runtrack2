SELECT salles.nom AS “Biggest Room”, etage.id AS num_etage
FROM salles
JOIN etage ON salles.id_etage = etage.id
WHERE salles.capacite = (SELECT MAX(salles.capacite)FROM salles);