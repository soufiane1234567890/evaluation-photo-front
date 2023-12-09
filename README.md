# Projet de Site Vitrine de Photographie

Bienvenue dans le projet de site vitrine de photographie basé sur Laravel 9 et Nova 4.

## Installation en Local

### Prérequis
Assure-toi d'avoir les éléments suivants installés sur ta machine :
- PHP >= 8.0
- Composer
- Node.js
- MySQL

### Étapes d'Installation

1. **Clone le projet depuis le repository GitHub :**
    ```bash
    git clone https://github.com/soufiane1234567890/evaluation-photo-front.git
    ```

2. **Navigue vers le répertoire du projet :**
    ```bash
    cd evaluation-photo-front
    ```

3. **Installe les dépendances PHP avec Composer :**
    ```bash
    composer install
    ```

4. **Installe les dépendances JavaScript avec npm :**
    ```bash
    npm install
    ```

5. **Copie le fichier d'environnement :**
    ```bash
    cp .env.example .env
    ```

6. **Configure les paramètres de la base de données dans le fichier `.env`.**

7. **Génère la clé d'application Laravel :**
    ```bash
    php artisan key:generate
    ```

8. **Exécute les migrations pour créer les tables de la base de données :**
    ```bash
    php artisan migrate
    ```

9. **Démarre le serveur local :**
    ```bash
    php artisan serve
    ```
10. **mettre la base de donnée**
a la racine du projet vous avez la base de donnée (evaluation.sql)que vous allez importé dans votre mysql 
mettez les acces dans le fichier .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=evaluation
DB_USERNAME=root
DB_PASSWORD=
11. **Visite http://localhost:8000 dans ton navigateur.**

## Installation en Ligne

Pour déployer le projet en ligne, tu peux suivre les étapes ci-dessus en adaptant la configuration du serveur et de la base de données dans le fichier `.env`.

## Accès au Backoffice

Après l'installation en local, tu peux accéder au backoffice de Nova à l'adresse suivante : http://localhost:8000/admin.

Utilise les identifiants par défaut ou crée un compte administrateur selon les besoins.

Identifiants par défaut :
- Email: admin@gmail.com
- Mot de passe: password