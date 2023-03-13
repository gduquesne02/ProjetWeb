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
    <form method="post" class="form">
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
        <select class="form-select">
            <option value=""></option>
        </select><br /><br />
        <label class="form-control"><input class="form-radio" type="radio" name="admin" value="true" />Administrateur</label><br /><br />
        <input type="submit" value="Inscrire" class="form-submit" />
    </form>
</body>

</html>