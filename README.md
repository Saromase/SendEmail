# Création d'un pluggin pour WordPress

L'objectif de ce pluggin est une de prise de Rendez-vous simple, ainsi qu'un confirmation ou modification du Rende-vous avec envoie de mail automatique 24H avant le Rendez-vous.

## Réalisation commune avec :   

+ [Alice](https://github.com/Acima2)
+ [Francois](https://github.com/fm35)

## Création de la Base de données  

```SQL
CREATE TABLE `rendez_vous` ( `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `firstname` VARCHAR(255) NOT NULL , `mail` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , `animal` VARCHAR(255) NOT NULL , `name_animal` VARCHAR(255) NOT NULL , `message` VARCHAR(1024) NOT NULL , `status` TINYINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
