<?php 
    $est_premier= 1;
    if ($nombre<2){
        $est_premier=TRUE;
    }
    else {
        for($i=2;$i<=sqrt($nombre);$i++){
            if ($nombre % $i==0) {
                $est_premier=FALSE;
            }
        }
    }
    if ($est_premier){
        echo( "$nombre est un nombre premier");
        break
    }
    else{
        echo("$nombre n\'est pas un nombre premier");
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>premier</title>
</head>
<body>
    <form method="post">
        <label for="">veuiller saisir le nombre: </label>
        <input type="text" name="number"><br>
        <button type="button">envoyer</button>
    </form>
</body>
</html>