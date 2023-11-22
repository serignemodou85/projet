<?php
    $nombre = 0; 
    if (isset($_POST['number'])) {
        $nombre = $_POST['number']; 
    }

    if ($nombre == 0) { 
        echo "0 n'est ni un nombre pair ni un nombre impair";
    } else if ($nombre % 2 == 0) { 
        echo "$nombre est un nombre pair.";
    } else { 
        echo "$nombre est un nombre impair.";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NombrePair_Impair</title>
</head>
<body>
    <form method="post"> 
        <label for="">Veuillez saisir le nombre : </label>
        <input type="text" name="number" value="<?php echo $nombre; ?>"><br> 
        <button type="submit">Valider</button>
    </form>
</body>
</html>
