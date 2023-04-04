<?php
include_once "facture.php";
$ligne_commande =
    array(
        array(
            "designation" => "Hotel",
            "montantHT" => "58,33",
            "montantTTC" => "70"
        ),
        array(
            "designation" => "Repas",
            "montantHT" => "28,33",
            "montantTTC" => "34"
        )
    );
$lieu = [
    "5 rue des fleurs",
    "59800 Lille"
];
$a = create_facture(3, $ligne_commande, "12/12/1999", $lieu);
