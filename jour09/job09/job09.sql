SELECT * FROM etudiants
WHERE DATEDIFF(CURDATE(), naissance) / 365.25 < 18;
