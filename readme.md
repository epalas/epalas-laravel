<p align="center"><img width="250px" height="150" src="http://pingouin1.heig-vd.ch/epalas/img/gazzar-logo.svg"></p>

## A propos du projet

Ce dossier contient le projet développé dans le cadre du cours Projet d'Articulation qui fait partie intégrante du 
cursus de la formation [Bachelor en Ingénierie des Médias](https://heig-vd.ch/formations/bachelor/filieres/ingenierie-des-medias) 
à la [HEIG-VD](https://heig-vd.ch). Il prend place à la fin de la 2ème année. Ce dernier consiste à développer un prototype 
d’application web d’e-commerce dans le domaine de la vente de vin.

Ce type de projet est l’occasion de mettre en pratique les diverses connaissances et compétences acquises lors des deux 
premières années du cursus ; que ce soit au niveau de la technique, de la communication ou encore du management. 
Pour mener à bien ce projet, une équipe d’étudiants composée de 6 personnes s'est chargée des tâches effectuées. 

Celle-ci est scindée en deux sous-équipes de 3 : une équipe « front-end » s’occupant du design et de l’expérience utilisateur 
une équipe « back-end » s’occupant des requêtes client-serveur et de la base de données

En ce qui concerne l’aspect lié à la gestion de projet, un étudiant a endossé le rôle de chef de projet secondé par un chef de projet remplaçant en cas de mésaventure. 

L'équipe est composée des six étudiants suivants :
- Adrien Lestuzzi
- Audric Dubuis
- Pedro Garcia
- Lucien Pochon
- Steve Maibach
- Elisa Biver

## Installation
1. Clonez ce répositoire dans votre machine
2. Créez une base de données appelée <i>epalas</i> sur votre gestionnaire SQL
3. Placez-vous dans le dossier du projet (<code>cd chemin/vers/epalas-laravel</code>) 
4. Lancez la commande <code>composer install</code> et ensuite <code>composer update</code>
5. Renommez le fichier <code>.env.example</code> en <code>.env</code>
6. Entrez les variables d'accès dans le fichier <code>.env</code> pour pouvoir accéder votre base de données
7. Lancez la commande <code>php artisan migrate:install</code>
8. Lancez la commande <code>php artisan migrate</code> pour l'installation des tables
9. Lancez la commande <code>php artisan key:generate</code> pour la génération de votre clé d'utilisation
10. Lancez la commande <code>composer dump-autoload</code> pour rafraîchir la gestion des classes
11. Lancez la commande <code>php artisan db:seed</code>

<p align="center"><img width="50px" height="30" src="https://github.com/epalas/epalas-laravel/blob/master/public/img/epalas-agency-logo.png"></p>
