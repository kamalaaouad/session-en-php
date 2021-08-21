<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
</head>
<body>
<h3>Authentification</h3>
<form action="verifAuth.php" method="post">
    Login :         <input type="text" name="login">
    Mot de passe :  <input type="password" name="pwd">
                    <input type="submit" value="Valider">
</form>
<?php
    if(isset($_GET["error"]) and $_GET["error"] == "login"){
        echo "<h4>Login et / ou mot de passe incorrectes</h4>";
    }

    if(isset($_GET["error"]) and $_GET["error"] == "auth"){
        echo "<h4>Veuillez introduire votre login et mot de passe</h4>";
    }
?>
</body>
</html>