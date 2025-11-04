<?php
// Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
// colonnes représentant la grille. Au début de la partie, chacune des cases contient un
// bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
// est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
// Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
// toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et

// réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
// permet également de réinitialiser la partie à tout moment.

function checkGagnant($grille, $joueur)
{
    // Vérifier les lignes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $joueur && $grille[$i][1] === $joueur && $grille[$i][2] === $joueur) {
            return true;
        }
    }

    // Vérifier les colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($grille[0][$j] === $joueur && $grille[1][$j] === $joueur && $grille[2][$j] === $joueur) {
            return true;
        }
    }

    // Vérifier les diagonales
    if ($grille[0][0] === $joueur && $grille[1][1] === $joueur && $grille[2][2] === $joueur) {
        return true;
    }
    if ($grille[0][2] === $joueur && $grille[1][1] === $joueur && $grille[2][0] === $joueur) {
        return true;
    }

    return false;
}

session_start();
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['tour'] = 'X'; // X commence
    $_SESSION['gagnant'] = null;
}
if (isset($_POST['reset'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['tour'] = 'X';
    $_SESSION['gagnant'] = null;
}
if (isset($_POST['case']) && $_SESSION['gagnant'] === null) {
    list($i, $j) = explode(',', $_POST['case']);
    if ($_SESSION['grille'][$i][$j] === '-') {
        $_SESSION['grille'][$i][$j] = $_SESSION['tour'];
        if (checkGagnant($_SESSION['grille'], $_SESSION['tour'])) {
            $_SESSION['gagnant'] = $_SESSION['tour'];
        } else {
            $_SESSION['tour'] = ($_SESSION['tour'] === 'X') ? 'O' : 'X';
        }
    }
}
$matchNul = true;
foreach ($_SESSION['grille'] as $ligne) {
    if (in_array('-', $ligne)) {
        $matchNul = false;
        break;
    }
}
if ($matchNul && $_SESSION['gagnant'] === null) {
    $_SESSION['gagnant'] = 'Nul';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #b9acacff;
        }

        td {
            width: 100px;
            height: 100px;
            text-align: center;
            border: 2px solid #000000ff;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2fa9bcff;
        }

        .reset-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>Jeu du Morpion</h1>
    <?php if ($_SESSION['gagnant'] !== null): ?>
        <h2>
            <?php
            if ($_SESSION['gagnant'] === 'Nul') {
                echo "Match nul !";
            } else {
                echo $_SESSION['gagnant'] . " a gagné !";
            }
            ?>
        </h2>
    <?php else: ?>
        <h2>C'est au tour de <?php echo $_SESSION['tour']; ?></h2>
    <?php endif; ?>
    <form method="post" action="">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['grille'][$i][$j] === '-' && $_SESSION['gagnant'] === null): ?>
                                <button type="submit" name="case" value="<?php echo $i . ',' . $j; ?>">-</button>
                            <?php else: ?>
                                <?php echo $_SESSION['grille'][$i][$j]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <br>
        <button type="submit" name="reset" class="reset-btn">🔄 Réinitialiser la partie</button>
    </form>
</body>

</html>