<?php


//en utilisant la ligne de commande "php bin/console make:entity", générez un nouvelle entité nommée "Meal"
//cette entité devra contenir un id (pas besoin de le créer, il est créé automatiquement), un name (string 255), une recette (string 255) et createdAt (datetime)
//Quand l'entité est correctement générée, générez la requête SQL avec "php bin/console make:migration"
//Allez vérifier dans le dossier migration que la requête SQL a correctement été générée
//Executez la requête SQL générée avec  "php bin/console doctrine:migration:migrate"
//Vérifiez dans phpmyadmin que la table a été créée

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Meal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $recette = null;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getRecette(): ?string
    {
        return $this->recette;
    }

    public function setRecette(string $recette): static
    {
        $this->recette = $recette;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
