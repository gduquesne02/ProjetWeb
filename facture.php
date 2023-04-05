<?php

use Spipu\Html2Pdf\HTML2PDF;

function test()
{
    require_once("vendor/autoload.php");
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
    $html2pdf->output();
}

function create_facture($user, $ligne_commande, $date, $lieu)
{
    include_once "conf.php";
    require_once('vendor/autoload.php');


    if (count($ligne_commande) <= 9) {
        $footer = "<tfoot><tr>
        <td colspan='5'><pre>

        </pre>
            <hr>
        </td>
    </tr>
    <tr>
        <td style='text-align: center;' colspan='5' class='centre'>
            Projet Web IUT Calais <br>
            19 Rue Louis David, 62100 Calais
        </td>
    </tr></tfoot>   
    ";
        $espacement = "";
        $espacePageDeux = "";
    } else {

        $espacePageDeux = espacePageDeux($ligne_commande, true);
        $espacement = "<tr><td><pre>










        </pre></td></tr><tr><td style='color:#FFF;' height='80'>espacement</td></tr><tr>
        <th class='centre'>Contrat</th>
        <th class='centre'>Designation</th>
        <th class='centre'>Loyer</th>
        <th class='centre'>FeesHT</th>
        <th class='centre'>FeesTTC</th>
    </tr>
    <tr><td style='color:#FFF;' height='25'>espacement</td></tr>";
        $footer = "<tfoot><tr>
        <td colspan='5'>
            <hr>
        </td>
    </tr>
    <tr>
        <td style='text-align: center;' colspan='5' class='centre'>
        Projet Web IUT Calais <br>
        19 Rue Louis David, 62100 Calais
        </td>
    </tr><tr><td colspan='5'></td><td>[[page_cu]]/[[page_nb]]</td></tr></tfoot>   
    ";
    }

    $sql = "SELECT * FROM users WHERE `id` = $user ";
    $result = $bdd->prepare($sql);
    $result->execute();
    $result = $result->fetchAll();
    if (true) {
        if (count($result) > 0) {
            $row = $result;
            $prenom = $row[0]["firstname"];
            $nom = $row[0]["lastname"];
            $mail = $row[0]["email"];
            $adresseLigne1 = $row[0]["iut"];
        } else {
            return false;
        }
    } else {
        return false;
    }
    $nbLigne = 0;
    $loyerTotal = 0;
    $frais = "";
    $total = 0;
    $horsTaxe = 0;
    foreach ($ligne_commande as $val) {
        $nbLigne++;
        $designation = $val["designation"];
        $loyer = number_format(floatval($val["montantHT"]), 2, ',', ' ');
        $feesHT = number_format(floatval($val["montantTTC"]), 2, ',', ' ');
        // $feesTTC = number_format(floatval($val["feesTTC"]), 2, ',', ' ');
        if ($nbLigne == 100) {
            $frais = $frais . $espacement;
        }
        $frais = $frais .  "
        <tr>
        <td height='35' width='265' class='centre '>$designation</td>
        <td height='35' class='centre '>$loyer €</td>
        <td height='35' class='centre '> $feesHT €</td>
    </tr>";
        $total += floatval($feesHT);
        $horsTaxe += floatval($loyer);
    }


    $TVA = number_format(floatval($total - $horsTaxe), 2, ',', ' ');
    $recevoir = number_format(floatval($loyerTotal - $total), 2, ',', ' ');
    $total = number_format(floatval($total), 2, ',', ' ');
    $horsTaxe = number_format(floatval($horsTaxe), 2, ',', ' ');
    $loyerTotal = number_format(floatval($loyerTotal), 2, ',', ' ');

    $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, "UTF-8", array(25, 40, 0, 5));
    $html = "<style type='text/css'>

    table {
        width: 100%;
        color: #717375;
        font-family: helvetica;
        line-height: 5mm;
    }

	.image {
        width: 275px;
    }

    .border th {
        border: 2px solid #000;
        color: white;
        padding: 10px;
        font-weight: normal;
        font-size: 14px;
        text-align: center;
    }


    .no-border {
        border-right: 1px solid #CFD1D2;
        border-left: none;
        border-top: none;
        border-bottom: none;
    }

    th, td, table {
        color: #000;
    }

    .gauche {
        text-align: left;
    }

    .droite {
        text-align: right;
    }

    .centre {
        text-align: center;
    }
    
    .item {
        background-color: #E0E0E0;
    }

    .size {
        font-size: 18px;
    }
    .exept {
        color: #000;
        border: solid;
</style>
<page>
<table>
<tbody>
    <tr>
        
        <th colspan='1' class='gauche' style='font-size: 35px'>DEVIS</th>
        <th colspan='4' class='droite'><img src='assets/img/logo.png'>  </th>
        <br><br>
    </tr>
    <tr>
        <th class='gauche exept'>Date</th>
        <th class='centre' colspan='2'>Contact</th>
        <th colspan='2' class='droite'>Evenement</th>
    </tr>
    <tr>
        <th class='gauche'>$date <br><br></th>
        <th colspan='2' class='centre'>$mail<br><br></th>
        <td colspan='2' rowspan='2' class='droite'>" . $lieu[0] . "<br>" . $lieu[1] . " <br></td>
    </tr>

    <tr>
        <th colspan='5' class='gauche'>FACTURER À</th>
    </tr>
    
    <tr>
        <td>$prenom $nom <br>
        $adresseLigne1 </td>
    </tr>
    <tr>
        <td><br><br></td>
    </tr>
    <tr class='border'>

        <th class='centre'>Désignation frais</th>

        <th class='centre'>frais HT</th>

        <th class='centre'>frais TTC</th>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    $frais
    <tr>
    <td><br></td>
    </tr>
    <tr class='border'>
        <td colspan='2'></td>
        <td height='20' class='centre'>Sous-total</td>
        <td height='20' class='centre'>$horsTaxe €</td>
    </tr>
    <tr class='border'>
        <td colspan='2'></td>
        <td height='20' class='centre'>TVA 20%</td>
        <td height='20' class='centre'>$TVA €</td>
    </tr>
    <tr class='border'>
        <td colspan='2'></td>
        <th height='20' class='centre'>TOTAL TTC</th>
        <th height='20' class='centre'>$total €</th>
    </tr>
    <tr><td></td></tr>
    </tbody>
    $footer
</table>
</page>
    
    ";

    $html2pdf->writeHTML($html);
    //$html2pdf->output(__DIR__ . '\assets\factures\Facture' . $nom . $prenom . $lieu[0] . '.pdf', 'F');
    $html2pdf->output('facture.pdf', 'D');
    return __DIR__ . '/assets/factures/FactureUser.pdf';
}


function espacePageDeux($ligne_commande, $user)
{
    $nb = 16 - (count($ligne_commande) - 7);
    $nb2 = 14 - (count($ligne_commande) - 7);
    $result = "";

    if ($user) {
        for ($i = 0; $i < $nb2; $i++) {
            $result = $result . "<pre>
                </pre>";
        }
    } else {
        for ($i = 0; $i < $nb; $i++) {
            $result = $result . "<pre>
                </pre>";
        }
    }
    return $result;
}
