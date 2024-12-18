# chaima_elomrani_packages
Gestion des Packages et Auteurs 

Description du Projet

Ce projet vise à moderniser le système de gestion des packages et auteurs pour une communauté de développeurs JavaScript. Il offre une application web centralisée permettant de :

Gérer les packages disponibles et leurs versions.

Gérer les auteurs contribuant aux packages.



Schéma de la Base de Données (ERD)

La base de données inclut les entités suivantes :

Auteurs : Contient les informations sur les contributeurs.

Packages : Contient les informations sur les packages créés.

Versions : Suivi des versions de chaque package.

collaboration: contient les packages faites par plusieurs auteurs 



Relations :

Un auteur peut contribuer à plusieurs packages.

Un package peut avoir plusieurs versions.

les auteurs peuvent avoir des collaborations entre eux 



Diagramme UML (Cas d'Utilisation)

Un diagramme de cas d'utilisation identifie les interactions principales entre les acteurs suivants :

Utilisateur :  peut afficher les détails des auteurs ou packages avec leurs version et details ou les deux ensemble .



Configuration de l'Environnement

Prérequis

Serveur local :  Laragon.

Éditeur de code : Visual Studio Code .

Navigateur : Chrome.


Étapes de Configuration

Clonez le projet dans votre répertoire local.

Configurez la base de données en important le fichier tables.sql dans votre SGBD (MySQL).

Configurez les paramètres de connexion dans config/connection.php.

Lancez le serveur local et accédez à index.php.



Scripts SQL

Le fichier tables.sql contient :

La création des tables auteurs, packages, versions et collaborations.

Des requêtes pour insérer des données initiales.

Une requête de jointure simple entre les tables packages, auteurs et versions .



Fonctionnalités en PHP

Ajouter des Données

Auteurs : Formulaire dans add_author.php.

Packages : Formulaire dans add_package.php.


Obtenir les Données du base de données 

obtenir les données : read_author.php .

obtenir les données : read_package.php.

Affichage des données :

affichage de carte :

Details des auteurs : author.php

Details des packages : package.php

affichage de tous les details : home.php


Contributions

Si vous souhaitez contribuer :

Forkez ce projet.

Créez une branche pour votre fonctionnalité : git checkout -b nouvelle-fonctionnalite.

Soumettez une pull request.



Remerciements

Merci d'avoir utilisé et contribué à ce projet !





