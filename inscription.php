<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Alpage Web - Inscription</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/inscription.css" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
</head>

<body>
    <form method="post" class="form" action='./inscr_user.php'>
        <h2>Inscription</h2>
        <div class="form-name">
            <div>
                <div class="form-label"><label for="lastName">Nom</label></div>
                <input type="text" name="lastName" class="form-input" /><br /><br />
            </div>
            <div>
                <div class="form-label"><label for="firstName">Prénom</label></div>
                <input type="text" name="firstName" class="form-input" /><br /><br />
            </div>
        </div>
        <div class="form-label"><label for="email">E-mail</label></div>
        <input type="text" name="email" class="form-input" /><br /><br />
        <div class="form-label">
            <label for="password">Mot de passe</label>
        </div>
        <input type="password" name="password" class="form-input" /><br /><br />
        <div class="form-label"><label for="iut">Établissement</label></div>
        <select class="form-select" name="iut">
            <?php
            include_once('./DAO.php');
            $DAO = new DAO;
            $list = $DAO->getEtab();
            foreach ($list as $user => $infUser) {
                $etab = $infUser[0];
                echo '<option value="' . $etab . '" name= "iut">' . $etab . '</option>';

            }
            ?>

        </select><br /><br />
        <input type="radio" id="s_admin" name="status" value="S_ADMIN">
        <label for="s_admin">Super Admin</label>

        <input type="radio" id="admin" name="status" value="ADMIN">
        <label for="admin">Admin</label>

        <input type="radio" id="user" name="status" value="USER">
        <label for="user">User</label><br /><br />
        <input type="submit" value="Inscrire" class="form-submit" />
    </form>
</body>

</html>