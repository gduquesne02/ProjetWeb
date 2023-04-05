<?php
session_start();
include_once('DAO.php');
$dao = new DAO();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/b9398f24d6.js" crossorigin="anonymous"></script>

    <title>Liste des utilisateurs</title>
</head>

<body>



    <main id="main">
        <h2 class="center-text">Liste des utilisateurs</h2>
        <div class="buttons_listusers wrapper">
            <div class="btns-grp">
                <div class="btns-grp" style="margin:10px">
                    <a href="accueil.php"class="btn btn-main btn-primary">Accueil</a>
                    <a href="#" class="btn btn-main btn-primary" onclick="AddUserBoxOn()" style="margin:auto">Ajouter</a>
                </div>

            </div>




        </div>
        <div class="wrapper">
            <table class="table table-bordered thead-dark table-striped">
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>IUT</th>
                    <th>Action</th>
                </tr>
                <?php
                $listUsers = $dao->listUsers();
                foreach ($listUsers as $user) {
                    echo '<tr>
            <td>' . $user[1] . '</td>
            <td>' . $user[2] . '</td>
            <td>' . $user[3] . '</td>
            <td>' . $user[5] . '</td>
            <td>
                <a href="#" class="btn btn-primary" onclick="EditUserBoxOn(' . $user[0] . ')">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary" onclick="window.location.href=\'controllers/DeleteUser.php?id=' . $user[0] . '\'">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
        </tr>';
                }
                ?>

            </table>
        </div>
    </main>



    <div class="post-popup job_post" id="add_post">
        <div class="post-project">
            <h3>Ajouter Utilisateurs</h3>
            <div class="post-project-fields">
                <form action="controllers/AddUser.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="prenom" placeholder="Prénom" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="nom" placeholder="Nom" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12">
                            <input type="password" name="mdp" placeholder="Password">
                        </div>

                        <div class="col-lg-12">
                            <input type="text" name="iut" placeholder="IUT">
                        </div>

                        <select name="status">
                            <option value="S_ADMIN">S_ADMIN</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>
                        </select>
                        <div class="col-lg-12 center">
                            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="post">Ajouter</button>
                            <button class="btn btn-secondary btn-lg btn-block" href="" title="" type="cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div><!--post-project-fields end-->
            <a href="#" onclick="AddUserBoxOn()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <g fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12zm8.207-3.207a1 1 0 0 0-1.414 1.414L10.586 12l-1.793 1.793a1 1 0 1 0 1.414 1.414L12 13.414l1.793 1.793a1 1 0 0 0 1.414-1.414L13.414 12l1.793-1.793a1 1 0 0 0-1.414-1.414L12 10.586l-1.793-1.793z" fill="currentColor" />
                    </g>
                </svg></a>
        </div><!--post-project end-->
    </div><!--post-project-popup end-->

    <?php
    $listUser = $dao->listUsers();
    foreach ($listUser as $user) {
        echo '
                <div class="post-popup job_post" id="edit_user' . $user[0] . '">
                        <div class="post-project">
                        <h3>Modifier un évenement</h3>
                        <div class="post-project-fields">
                            <form action="controllers/EditUser.php" method="post" enctype="multipart/form-data"> 
                                <div class="row">
                                <div class="col-lg-12">             
                                  <input type="hidden" name="idUser" value="' . $user[0] . '" >
                                  <input type="text" name="prenom" placeholder="Prénom" value="' . $user[1] . '" required>
                                </div> 
                                <div class="col-lg-12">
                                    <input type="text" name="nom" placeholder="Nom" value="' . $user[2] . '" required>
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="email" placeholder="email" value="' . $user[3] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $user[5] . '">
                                </div>
                                    <div class="col-lg-12">
                                      <button  class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="post">Modifier</button>
                                      <button class="btn btn-secondary btn-lg btn-block" href="#" title="" type="cancel">Cancel</button>
                                      
                                    </div>
                                </div>
                            </form>
                        </div><!--post-project-fields end-->
                        <a href="#" onclick="EditUserBoxOn(' . $user[0] . ')"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12zm8.207-3.207a1 1 0 0 0-1.414 1.414L10.586 12l-1.793 1.793a1 1 0 1 0 1.414 1.414L12 13.414l1.793 1.793a1 1 0 0 0 1.414-1.414L13.414 12l1.793-1.793a1 1 0 0 0-1.414-1.414L12 10.586l-1.793-1.793z" fill="currentColor"/></g></svg></a>
                    </div><!--post-project end-->
                </div><!--post-project-popup end-->';
    } ?>

    <script>
        function EditUserBoxOn(userId) {
            var popup = document.getElementById("edit_user" + userId);
            var main = document.getElementById("main");
            var footer = document.getElementById("footer");
            popup.classList.toggle("active");
            main.classList.toggle("overlay");
        }
    </script>

    <script>
        function AddUserBoxOn(userId) {
            var popup = document.getElementById("add_post");
            var main = document.getElementById("main");
            var footer = document.getElementById("footer");
            popup.classList.toggle("active");
            main.classList.toggle("overlay");
        }
    </script>


</body>

</html>