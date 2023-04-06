# ProjetWeb

Participants : 



- [Phillipe Plaïa](https://github.com/CMC59) (Responsable Communication)

- [Guillaume Duquesne](https://github.com/gduquesne02) (Secrétaire)

- [Jordan Godde](https://github.com/JordanLPDIM) (Développeur)

- [Clément Delhaye](https://github.com/ClementDelhaye) (Développeur)

- [Lupini Medi](https://github.com/lupini20) (Développeur)

- [Alexandre Antolotti](https://github.com/AlexandreALT) (Développeur)

- [El mehdi El Aine](https://github.com/ainemehdi6) (Développeur)

- [Oussama Abakarrim](https://github.com/oussama7845) (Développeur)

- [Antoine Lamesch](https://github.com/AntoineLamesch) (Chef de projet)

- [Thibault Debril](https://github.com/Zoryger) (Développeur)

Récapitulatif des travaux faits par chacun : 

- Oussama et El Mehdi = gestion des utilisateurs.

- Clément et Alexandre = wireframe maquette, page de connexion, le footer, l'affichage de la liste des événements et la page de détail d'un événement. l'affichage des différents boutons en fonction du rôle de l'utilisateur en plus.

- Philippe = moodboard, réunion avec Mme Fernandez, « cahier des charges », DAO(connexion à la bdd et fonction crud), formulaire création événement, formulaire de contact, création de la base de donnée, hébergement de la base de donnée, création du diagramme de class, gestion des événements.

- Antoine : réunion avec Mme Fernandez, cahier des charges, questionnaire Google forum cahier des charges, relier le front au back sur la page événement, la barre de navigation, formulaire création événement, formulaire contact, participer à un événement, liaison avec le devis.

- Thibault : génération du devis en pdf, ajout d'un user dans un événement.

- Jordan : le formulaire de contact.

- Guillaume : le design, le style css, Fichier ReadMe, Gestion du Discord, Création du Repo sur Github.

- Medi : Fichier ReadMe, le design style css, modale mot de passe oublié, aide déconnexion


Alpage Web

---

## 🛠 Technologies utilisé :
Javascript, HTML, CSS, PHP, MySQL, Bootstrap, Ajax

## FAQ

#### Hébergement cloud possible? Pour éviter la copie des sites. Centraliser sur un SEUL site avec des membres qui ont des rôles définis, par exemple les chefs de département qui ont le droit de publier les événements.

Oui l'hébergement cloud est possible.

#### Dois-t-on avoir une charte graphique spécifique ?

Oui voici la charte graphique :

| Couleur             | Code Hexadecimal                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Vert | ![#A3BB07](https://via.placeholder.com/10/A3BB07?text=+) #A3BB07 |
| Gris | ![#2f3138](https://via.placeholder.com/10/2f3138?text=+) #2f3138 |
| Violet | ![#55495A](https://via.placeholder.com/10/55495A?text=+) #55495A |




#### Quels sont toutes les options possibles pour les événements? Repas etc..



#### Quel est la date butoir ?

Le 5 Avril 2023 à 23h59

# ENVIRONNEMENT

Le site web a été conçu en utilisant le langage HTML pour la structure de la page et sa sémantique conformément à la norme définie par le World Wide Web Consortium (W3C) https://fr.wikipedia.org/wiki/Hypertext_Markup_Language avec Le style visuel et la présentation ont été gérés avec le langage informatique CSS, https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade ensuite JavaScript a été utilisé pour ajouter des fonctionnalités et des animations https://fr.wikipedia.org/wiki/JavaScript et Le langage de programmation PHP a été utilisé pour la gestion des scripts et de la base de données https://fr.wikipedia.org/wiki/PHP# WampServer a été utilisé pour la gestion locale des scripts PHP et de la base de données https://fr.wikipedia.org/wiki/WampServer De plus, Bootstrap a été utilisé pour créer un design adaptatif et offrir des outils pratiques pour la conception de la page web https://getbootstrap.com/
 
 # INSTALLATION 
 
-Pour pouvoir travailler localement sans se connecter à un serveur externe, il est recommandé d'installer une plateforme de développement web telle que WampServer ou Xampp. Ces outils permettent de faire fonctionner des scripts PHP localement. Il est préférable d'installer la version 7 de PHP. Pour plus de détails, vous pouvez consulter la page Wikipedia dédiée à WampServer à l'adresse https://fr.wikipedia.org/wiki/WampServer ou suivre la documentation officielle pour l'installation de WampServer à l'adresse https://www.wampserver.com/en/download-wampserver-64bits/ ou Xampp à l'adresse https://www.apachefriends.org/download.html

-Et avoir un navigateur web qui est un logiciel informatique utilisé pour accéder et afficher des pages web. Les navigateurs web permettent aux utilisateurs de naviguer sur Internet en utilisant une interface graphique conviviale et intuitive. Ils interprètent le code HTML, CSS et JavaScript des pages web pour afficher le contenu de manière cohérente et agréable à lire https://fr.wikipedia.org/wiki/Navigateur_web

# LANCEMENT DU PROJET

-Pour lancer le projet, vous devez d'abord démarrer votre serveur Apache. Si vous utilisez Xampp, vous pouvez utiliser ce logiciel pour démarrer votre serveur, sinon vous pouvez utiliser WampServer. Assurez-vous que votre serveur est bien en cours d'exécution pour gérer correctement la base de données et les scripts PHP. Pour accéder au projet, ouvrez votre navigateur et saisissez l'URL suivante dans la barre d'adresse : http://localhost/challengeweb/ProjetWeb/accueil.html. Remplacez "challengeweb" par le nom du dossier que vous avez donné à votre projet.

-Vous serez redirigé vers la page d'accueil de l'application. Pour vous connecter, utilisez l'adresse e-mail "test.test@gmail.com" et le mot de passe "test".

-Pour un accès superAdmin vous pouvez utiliser marguerite.fernandez@iut-littoral.fr et comme mdp Marguerite1@

-Il vous sera peut être nécessaire d'installer le dossier vendor, pour cela il vous suffit d'installer composer(https://getcomposer.org/download/) si jamais ce n'est pas fait et d'installer les bibliothèques HTML2PDF et Swiftmailer.

# FONCTIONNALITÉS 

-Gestion des tâches par un supper admis

   -Création d'un compte utilisateur et attribution de rôle  http://localhost/challengeweb/ProjetWeb/GestionUser.php
   
   -modification et suppression d'un compte utilisateur
   
   -Création d'un événement, modification et suppression
   
   -Connexion et déconnexion d'un compte utilisateur ou admis http://localhost/challengeweb/ProjetWeb/index.php
   
-S'inscrire  à un événement en tant qu'utilisateur http://localhost/projet-web_iut/ProjetWeb/liste_evenement.php

- se désinscrire  à un événement
 
-Génération d'un fichier PDF (facture) pour l'inscription à un événement http://localhost/challengeweb/ProjetWeb/join_event.php

-Contacter l'administrateur via un formulaire de contact par e-mail  http://localhost/projet-web_iut/ProjetWeb/contactform.html


# TOUS LES LIENS DE NOTE PROJET


- Lien du site : https://gestioniut.antoine-lamesch.fr/

- Lien du Git : https://github.com/gduquesne02/ProjetWeb 

- Lien des Notions :
			 https://www.notion.so/1er-Compte-rendu-Challenge-Web-Mme-Pacou-23-01-23-4c9b9f84402442f4807a582b5ac6778c

			 https://www.notion.so/2er-Compte-rendu-Challenge-Web-Mme-Fernandez-25-01-23-04224f6037ea4ef6ae528545c3d905a1
			

- Lien du Trello : https://trello.com/invite/b/EIXRaqnY/ATTI832402c1d6208f8c586da9a83ca2dda47BF1DB9C/projet-web

- Lien du Figma : https://www.figma.com/file/R6WovFpPbIZsExrszlu2Sa/Alpage-web?node-id=0%3A1&t=xjkLjOtFEAlSYUmC-1

- Lien vers la vidéos : https://www.youtube.com/watch?v=nKa-_ag3u1Y



   

