# Application de Gestion des apprenants

Simplon cherche à s'émanciper des solutions externes utilisées pour ses services. On vous a demandé de créer une application de gestion des élèves, qui permettra de gérer les absences et les retards. 
Le cahier des charges et les maquettes vous sont fournies. L'application devra être fonctionnelle et mise en ligne en fin de brief, pour faire une démo à Simplon.


# Installation

Installer PHP, WampServer, MySQL.

Télécharger ce repository. 

Créer une base de données MySQL avec le fichier gestionapprenants.sql dans le dossier migration.

Modifiez le fichier config.php avec vos propres informations. Il se trouve à la racine du projet. Il est utilisé pour spécifier les paramètres du projet.

````
define('DB_HOST', 'localhost');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PWD', '');
define('PREFIXE', 'your password');

define('HOME_URL', 'your home url');

define('DB_INITIALIZED', TRUE);
````

Lancer le serveur PHP (local via wamp).

# Technologies Utilisées

HTML/CSS 

JavaScript 

PHP 8.3.0

MySQL 5.2.1 
