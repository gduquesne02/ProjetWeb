$(document).ready(function() {
    $('#monFormulaire').submit(function(e) {
        e.preventDefault(); // Empêche le formulaire d'être envoyé normalement

        // Récupération des valeurs des champs
        var message = $('#message').val();
        var email = $('#email').val();

        // Requête Ajax
        $.ajax({
            url: 'envoie_message.php',
            type: 'POST',
            data: {
                message: message,
                email: email
            },
            success: function(response) {
                alert(response); // Affichage de la réponse
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Erreur : ' + textStatus + ' - ' + errorThrown);
            }
        });
    });
});