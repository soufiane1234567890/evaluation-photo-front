<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
 <h1>Blog sur Laravel et Nova</h1>
  <p>Ce projet est un blog réalisé avec le framework PHP Laravel et l'outil d'administration Nova. Le but de ce projet est de créer une plateforme permettant la publication et la gestion de contenus éditoriaux.</p>
  
  <h2>Fonctionnalités</h2>
  <ul>
    <li>Gestion des articles : création, édition, suppression, publication</li>
    <li>Gestion des catégories d'articles</li>
    <li>Gestion des utilisateurs : création, édition, suppression, rôles</li>
    <li>Gestion des commentaires : validation, suppression</li>
    <li>Tableau de bord pour une vue d'ensemble des statistiques du blog</li>
  </ul>
  
  <h2>Pré-requis</h2>
  <ul>
    <li>PHP 7.3 ou supérieur</li>
    <li>MySQL ou PostgreSQL</li>
    <li>Composer</li>
  </ul>
  
  <h2>Installation</h2>
  <ol>
    <li>Cloner le dépôt git</li>
    <li>Installer les dépendances avec la commande <code>composer install --ignore-platform-reqs</code></li>
    <li>Configurer les variables d'environnement dans le fichier <code>.env</code></li>
    <li>Créer la base de données avec la commande <code>php artisan migrate</code></li>
    <li> Créer un nouvelle utilisateur sur avec la commande <code>php artisan nova:user</code> et renseigner les infos</li>
    <li>Lancer le serveur de développement avec la commande <code>php artisan serve</code></li>
  </ol>
  
  <h2>Utilisation</h2>
  <p>Le projet est accessible depuis un navigateur à l'adresse <code>http://localhost:8000</code>. Pour accéder à l'outil d'administration Nova, rendez-vous sur l'URL <code>http://localhost:8000/nova</code> et connectez-vous avec un compte utilisateur ayant les droits d'administration.</p>
  <p> il est aussi en ligne pour la correction sur le lien => https://foruminfo.net/</p>
  
  <h2>Contribution</h2>
  <p>Les contributions sont les bienvenues ! N'hésitez pas à signaler des problèmes, à faire des suggestions ou à envoyer des pull requests.</p>
  
  <h2>Auteur</h2>
  <p>Ce projet a été réalisé par Soufiane Ikadarne dans le cadre d'un projet de l'evaluation de Studi.</p>
