<?php

namespace App\Entity;
use App\Repository\CocktailsRepository;
use Doctrine\ORM\Mapping as ORM;  //j'importe la classe ORM pour utiliser les annotations de Doctrine

#[ORM\Entity(repositoryClass: CocktailsRepository::class)]
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