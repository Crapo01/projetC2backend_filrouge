# projetC2backend_filrouge
Access database SQLserver and MONGODB with PHP


# environnement de développement

WAMPSERVER
[lien](https://www.wampserver.com/en/download-wampserver-64bits/)

## SQLSRVR setup

ajouter les drivers:
[lien](https://learn.microsoft.com/fr-fr/sql/connect/php/step-1-configure-development-environment-for-php-development?view=sql-server-ver16)

en verifiant sur phpinfo():
![image](https://github.com/user-attachments/assets/89b29fea-a262-47c1-af5d-c7cc1d64a987)

php version  
architecture  
thread safety 

retirer les infos de version des drivers dans /ext puis...

![image](https://github.com/user-attachments/assets/67c22d5a-7a6b-49ed-b73b-73607c844eeb)

mettre a jour php.ini avec:  
extension=php_pdo_sqlsrv.dll  
extension=php_sqlsrv.dll  

## MONGODB setup

ajouter le driver:
[lien](https://www.php.net/manual/en/mongodb.installation.windows.php)

mettre a jour php.ini avec:  
extension=php_mongodb.dll  

utiliser composer à la racine du projet pour ajouter la librairie mongodb
[lien](https://www.php.net/manual/en/mongodb.tutorial.library.php)

en ligne de commande:  
composer require mongodb/mongodb


