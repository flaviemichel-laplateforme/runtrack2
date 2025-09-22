

/*Job 05
Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. 
La liste déroulante doit proposer au moins “style1”, “style2” et “style3. 
Créer 3 fichiers css nommés “style1.css”, “style2.css” et “style3.css”. 
Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer. */

<!DOCTYPE html>
<html>
<head>
    <title>Formulaires</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet" link="./style1.css"
 --- IGNORE --- 
    >
</head>
<body>
    <div>
        <h1>Formulaire de contact</h1>

        <form action="" method="post">
            <label  for="civilite">Civilité:</label>
            <select  placeholder="civilite" type="text" id="civilite" name="civilite" required>*
                <option>Mme</option>
                <option>Mr</option>
            </select>

            <label for="nom">Nom:</label>
            <input  placeholder="Nom" type="text" id="nom" name="nom">

            <label for="prenom">Prénom:</label>
            <input  placeholder="Prénom" type="text" id="prenom" name="prenom">

            <label for="style">Style:</label>
            <select placeholder="Style" type="text" id="datstylee" name="style">
                <option>Style1</option>
                <option>Style2</option>
                <option>Style3</option>
            </select>
 
</body>
</html>

