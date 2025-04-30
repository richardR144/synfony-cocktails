<?php

namespace App\Entity;


class Cocktail
{
    public $id;
    public $name;   
    public $description;
    public $image;
    public $ingredients = [];
    public $createdAt;
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