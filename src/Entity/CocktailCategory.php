<?php

//Créez une entité CocktailCategory, avec en propriété : id, name, createdAt et description (pas besoin de constructor)
//Ajoutez les annotations pour que cette classe correspondent à une table en BDD, avec une colonne pour l'id, une colonne pour le name etc
//Générez la requête SQL avec "php bin/console make:migration"
//Executez la requête SQL générée avec  "php bin/console doctrine:migration:migrate"

//Si vous avez des erreurs, vous pouvez supprimer completment la BDD piscine_cocktails
//Vous supprimez tous les fichiers qu'il y dans le dossier migrations
//Vous re-créez la bdd avec "php bin/console doctrine:database:create"
//[11:58]
//Vous regénérez la requête SQL pour créer les tables :  "php bin/console make:migration"
//Vous l'executez avec  "php bin/console doctrine:migration:migrate"

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;  //j'importe la classe ORM pour utiliser les annotations de Doctrine

#[ORM\Entity()] //j'indique que c'est une entité de Doctrine et que son repository est CocktailCategoryRepository


class CocktailCategory
{
    #[ORM\Id]  //j'indique que c'est la clé primaire de la table cocktails ce sont des annotations
    #[ORM\GeneratedValue] //j'indique que c'est une valeur générée automatiquement par la base de données (auto-incrémente)
    #[ORM\Column]  //j'indique que c'est une colonne de la table cocktails
    public $id;
    #[ORM\Column(length: 255)] // j'indique que c'est une colonne de la table cocktails, et que sa longueur est de 255 caractères
    public $name;
    #[ORM\Column(length: 255)]
    public $description;
    #[ORM\Column(type: 'datetime')]  //j'indique que c'est une colonne de la table cocktails, et que son type est datetime
    public $createdAt;   
    }


