Ecrivez dans le fichier “job14.sql” une requête permettant de sélectionner le prenom, le
nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018.

SELECT prenom, nom, naissance 
FROM etudiants
WHERE naissance >='1998-01-01' and naissance <='2018-12-31';