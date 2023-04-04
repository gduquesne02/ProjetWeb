<?php

require("./conf.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
  $req = "SELECT * FROM users WHERE email = :email AND password = :password";
  $res = $bdd->prepare($req);
  $res->bindParam(":email", $_POST['email']);
  $hashPassword = hash('sha256', $_POST['password']);
  $res->bindParam(":password", $hashPassword);
  $res->execute();
  $data = $res->fetchAll(PDO::FETCH_ASSOC);
  if (count($data) === 0) echo "<div class='wrongIdentification'>Identifiants incorrects</div>";
  else {
    session_start();
    $_SESSION['idUser'] = $data[0]['id'];
    $_SESSION['email'] = $data[0]['email'];
    $_SESSION['firstName'] = $data[0]['firstname'];
    $_SESSION['lastName'] = $data[0]['lastname'];
    $_SESSION['iut'] = $data[0]['iut'];
    $_SESSION['status'] = $data[0]['status'];
    header("Location: " . $_SERVER['REQUEST_URI'] . "accueil.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Alpage Web - Connexion</title>
  <link rel="stylesheet" href="./css/index.css" />
  <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
</head>

<body>
  <form method="post" class="form">
    <h2>Connexion</h2>
    <div class="form-label"><label for="email">E-mail</label></div>
    <input type="text" name="email" class="form-input" /><br /><br />
    <div class="form-label">
      <label for="password">Mot de passe</label>
    </div>
    <input type="password" name="password" class="form-input" /><br /><br />
    <a href="#" class="form-forgetPassword">Mot de passe oublié ?</a><br /><br />
    <input type="submit" value="Connexion" class="form-submit" />
  </form>
  <a href="test.php">lien</a>
</body>

</html>