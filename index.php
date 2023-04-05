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
    header("Location: accueil.php");
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <a href="#" class="form-forgetPassword" data-toggle="modal" data-target="#modalMotDePasseOublie">Mot de passe oublié ?</a><br /><br />
    <input type="submit" value="Connexion" class="form-submit" />
  </form>




  <!-- Modal -->
  <div class="modal fade" id="modalMotDePasseOublie" tabindex="-1" role="dialog" aria-labelledby="modalMotDePasseOublieLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalMotDePasseOublieLabel">Mot de passe oublié</h4>
        </div>
        <div class="modal-body">
          <p>Si vous ne vous souvenez plus de votre mot de passe, veuillez contacter l'administrateur.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

</body>

</html>