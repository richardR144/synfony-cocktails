<?php
//lors de l'examen, je peux expliquer la partie SQL avec cette exemplesans oublier de dire que l'on peut le faire 
//à la main et  dans ce cas là Symfony le fait pour nous avec la ligne de commande : php bin/console make:migrations
//Dans la classe Cocktail (dossier entity), rajoutez les annotations #[ORM] sur le nom de la classe (pour que 
//symfony / doctrine puisse créer la table cocktail en BDD (et sur les propriétés id, name etc (pour que symfony / doctrine puisse créer les colonnes)
namespace App\Entity;
use App\Repository\CocktailsRepository;
use Doctrine\ORM\Mapping as ORM;  //j'importe la classe ORM pour utiliser les annotations de Doctrine

#[ORM\Entity(repositoryClass: CocktailsRepository::class)]  //j'indique que c'est une entité de Doctrine et que son repository est CocktailsRepository
class Cocktail
{
    #[ORM\Id]  //j'indique que c'est la clé primaire de la table cocktails
    #[ORM\GeneratedValue] //j'indique que c'est une valeur générée automatiquement par la base de données
    #[ORM\Column]  //j'indique que c'est une colonne de la table cocktails
    public $id;
    #[ORM\Column(length: 255)] // j'indique que c'est une colonne de la table cocktails, et que sa longueur est de 255 caractères
    public $name;
    #[ORM\Column(length: 255)]   
    public $description;
    #[ORM\Column(length: 255)]
    public $image;
    #[ORM\Column(length: 255)]
    public $ingredients;
    #[ORM\Column(type: 'datetime')]  //j'indique que c'est une colonne de la table cocktails, et que son type est datetime
    public $createdAt;
    #[ORM\Column]  //j'indique que c'est une colonne de la table cocktails et comme je lui ai rien dit avant, il va prendre le type par défaut qui est boolean
    public $isPublished;

    public function __construct($name, $description, $image, $ingredients)
    {
        $this->id = 5; // valeur par défaut pour l'id
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->ingredients = $ingredients;
        $this->createdAt = new \DateTime();
        $this->isPublished = true;

    }
}


//David: 1/ Dans la ligne de commande (terminal ou terminal de vs code), executez la ligne de commande : "php bin/console make:migration" 
//pour demander à Symfony / Doctrine, de scanner vos annotations sur l'entité et de générer une requête SQL permettant de créer la table et les colonnes correspondantes.
//David : 2/ Dans la ligne de commandes, executez la ligne de commandes : "php bin/console doctrine:migrations;migrate"
//Ca va executer en BDD la requête SQL que vous avez généré à l'étape d'avant. Vérifiez en BDD que la table cocktail existe bien et que les colonnes ont bien été créées 
//Si ça a fonnctionné, vous devriez voir un nouveau fichier "Versionxxxxxxxxx" dans le dossier migration, contenant une requête SQL