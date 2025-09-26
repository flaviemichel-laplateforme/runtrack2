SELECT salles.nom AS nom_salle, etage.id AS num_etage
FROM salles
JOIN etage ON salles.id = etage.id
GROUP BY salles.nom, etage.id;