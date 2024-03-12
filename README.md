#True-news

## Description
True-news est un repo qui affiche dans sa version 1.0 des news pas très pertinentes et qui me permet de m'entrainer à utiliser le framework CodeIgniter 4. Il part du tutoriel de [CodeIgniter 4](https://codeigniter.com/user_guide/). Il est possible que ce repo évolue dans le futur pour devenir un faux vrai site d'actualité.

## Installation

prérequis:
- PHP 7.4 ou plus
- Composer
- MySQL
- npm pour tailwindcss
- node.js pour tailwindcss

Pour installer ce repo, il suffit de cloner le repo dans le dossier de votre choix. Ensuite, il faut installer les dépendances avec la commande `composer install`. Enfin, il faut créer un fichier `.env` à la racine du projet et y ajouter les informations de connexion à la base de données. Voici un exemple de fichier `.env`:
```
CI_ENVIRONMENT = development

NEWS_API_KEY = "your_api"

database.default.hostname = localhost
database.default.database = ci4tutorial
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

Pour l'apiKey de newsapi, il faut aller sur le site de [newsapi](https://newsapi.org/) et s'inscrire pour obtenir une clé d'API.

Pour mettre en place la base de données, il suffit de créer une base de données avec le nom `ci4tutorial` et d'importer le fichier `ci4tutorial.sql` qui se trouve à la racine du projet.

Pour mettre en place tailwindcss, il faut installer les dépendances avec la commande `npm install` et ensuite compiler les fichiers css avec la commande `npm run build`.

## Utilisation
Pour la base de données, il faut lancer son serveur

Pour lancer le projet, il suffit de lancer un serveur php avec la commande `php spark serve` à la racine du projet. Ensuite, il suffit de se rendre à l'adresse `http://localhost:8080` pour voir le projet.

Pour lancer le watcher de tailwindcss, il suffit de lancer la commande `npm run build` à la racine du projet.
