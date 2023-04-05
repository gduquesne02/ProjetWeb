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

    <title>Gestion des événements</title>
</head>

<body>



    <main id="main">
        <h2 class="center-text">Liste des événements</h2>
        <div class="buttons_listusers wrapper">
            <div class="btns-grp">
                <div class="btns-grp" style="margin:10px">
                    <a href="accueil.php" class="btn btn-mainbtn-primary">Retour Accueil</a>
                    <a href="create_event.html" class="btn btn-main btn-primary" onclick="AddEventBoxOn()"
                        style="margin:auto">Ajouter un événement</a>
                </div>

            </div>




        </div>
        <div class="wrapper">
            <table class="table table-bordered thead-dark table-striped">
                <tr>
                <th>Modification / Suppression</th>
                    <th>Nom de l'événement</th>
                    <th>Description</th>
                    <th>Date événement</th>
                    <th>Date fin d'inscription</th>
                    <th>Localisation</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Atelier</th>
                    <th>Goodies</th>
                    <th>Pause Café</th>
                    <th>Pause déjeuner</th>
                    <th>Nb max membre</th>
                    <th>Prix Hôtel</th>
                    <th>Nom Hôtel</th>
                    <th>Adresse Hôtel</th>
                    <th>Modification / Suppression</th>
                </tr>
                <?php
                $listEvent = $dao->listEvents();
                foreach ($listEvent as $event) {
                    echo '<tr>
                    <td>
                    <a href="#" class="btn btn-primary" onclick="EditEventBoxOn(' . $event[0] . ')">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-primary" onclick="window.location.href=\'controllers/DeleteEvent.php?id=' . $event[0] . '\'">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            <td>' . $event[1] . '</td>  
            <td>' . $event[2] . '</td>   
            <td>' . $event[3] . '</td>   
            <td>' . $event[4] . '</td>   
            <td>' . $event[5] . '</td>   
            <td>' . $event[6] . '</td>   
            <td>' . $event[7] . '</td>   
            <td>' . $event[8] . '</td>   
            <td>' . $event[9] . '</td>  
            <td>' . $event[10] . '</td>   
            <td>' . $event[11] . '</td>   
            <td>' . $event[13] . '</td>   
            <td>' . $event[14] . '</td>  
            <td>' . $event[15] . '</td>   
            <td>' . $event[16] . '</td>   
            <td>
                <a href="#" class="btn btn-primary" onclick="EditEventBoxOn(' . $event[0] . ')">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary" onclick="window.location.href=\'controllers/DeleteEvent.php?id=' . $event[0] . '\'">
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
            <h3>Ajouter un Evénement</h3>
            <div class="post-project-fields">
                <form action="controllers/AddEvent.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="name" placeholder="Nom de l'événement" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="description" placeholder="Description" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="date" name="dateEvent" placeholder="Date événement">
                        </div>
                        <div class="col-lg-12">
                            <input type="date" name="registrationEndDate" placeholder="Date fin d'inscription">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="location" placeholder="Localisation">
                        </div>
                        <div class="col-lg-12">
                            <input type="float" name="latitude" placeholder="latitude">
                        </div>
                        <div class="col-lg-12">
                            <input type="float" name="longitude" placeholder="longitude">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="workshop" placeholder="Atelier">
                        </div>
                        <div class="col-lg-12">
                            <input type="number" name="goodies" placeholder="Goodies">
                        </div>
                        <div class="col-lg-12">
                            <input type="float" name="coffeeBreak" placeholder="Pause Café">
                        </div>
                        <div class="col-lg-12">
                            <input type="float" name="lunchBreak" placeholder="Pause déjeuner">
                        </div>
                        <div class="col-lg-12">
                            <input type="number" name="maxMember" placeholder="Nb max membre">
                        </div>
                        <div class="col-lg-12">
                            <input type="number" name="hotel_prix" placeholder="Prix Hôtel">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="hotel_name" placeholder="Nom Hôtel">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="hotel_address" placeholder="Adresse Hôtel">
                        </div>
                        <div class="col-lg-12 center">
                            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit"
                                value="post">Ajouter</button>
                            <button class="btn btn-secondary btn-lg btn-block" href="" title=""
                                type="cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div><!--post-project-fields end-->
            <a href="#" onclick="AddEventBoxOn()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                    viewBox="0 0 24 24">
                    <g fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12zm8.207-3.207a1 1 0 0 0-1.414 1.414L10.586 12l-1.793 1.793a1 1 0 1 0 1.414 1.414L12 13.414l1.793 1.793a1 1 0 0 0 1.414-1.414L13.414 12l1.793-1.793a1 1 0 0 0-1.414-1.414L12 10.586l-1.793-1.793z"
                            fill="currentColor" />
                    </g>
                </svg></a>
        </div><!--post-project end-->
    </div><!--post-project-popup end-->

    <?php
    $listEvent = $dao->listEvents();
    foreach ($listEvent as $event) {
        echo '
                <div class="post-popup job_post" id="edit_event' . $event[0] . '">
                        <div class="post-project">
                        <h3>Modifier un événement</h3>
                        <div class="post-project-fields">
                            <form action="controllers/EditUser.php" method="post" enctype="multipart/form-data"> 
                                <div class="row">
                                <div class="col-lg-12">             
                                  <input type="hidden" name="idUser" value="' . $event[0] . '" >
                                  <input type="text" name="prenom" placeholder="Prénom" value="' . $event[1] . '" required>
                                </div> 
                                <div class="col-lg-12">
                                    <input type="text" name="nom" placeholder="Nom" value="' . $event[2] . '" required>
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="email" placeholder="email" value="' . $event[3] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[4] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[5] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[6] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[7] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[8] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[9] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[10] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[11] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[13] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[14] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[15] . '">
                                </div>
                                <div class="col-lg-12">
                                  <input type="text" name="iut" placeholder="numéro" value="' . $event[16] . '">
                                </div>
                                    <div class="col-lg-12">
                                      <button  class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="post">Modifier</button>
                                      <button class="btn btn-secondary btn-lg btn-block" href="#" title="" type="cancel">Cancel</button>
                                      
                                    </div>
                                </div>
                            </form>
                        </div><!--post-project-fields end-->
                        <a href="#" onclick="EditEventBoxOn(' . $event[0] . ')"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12zm8.207-3.207a1 1 0 0 0-1.414 1.414L10.586 12l-1.793 1.793a1 1 0 1 0 1.414 1.414L12 13.414l1.793 1.793a1 1 0 0 0 1.414-1.414L13.414 12l1.793-1.793a1 1 0 0 0-1.414-1.414L12 10.586l-1.793-1.793z" fill="currentColor"/></g></svg></a>
                    </div><!--post-project end-->
                </div><!--post-project-popup end-->';
    } ?>

    <script>
        function EditEventBoxOn(eventId) {
            var popup = document.getElementById("edit_event" + eventId);
            var main = document.getElementById("main");
            var footer = document.getElementById("footer");
            popup.classList.toggle("active");
            main.classList.toggle("overlay");
        }
    </script>

    <script>
        function AddEventBoxOn(userId) {
            var popup = document.getElementById("add_event");
            var main = document.getElementById("main");
            var footer = document.getElementById("footer");
            popup.classList.toggle("active");
            main.classList.toggle("overlay");
        }
    </script>


</body>

</html>