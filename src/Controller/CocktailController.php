<?php
namespace App\Controller;

use App\Entity\Cocktail;  //j'importe la classe Cocktail
use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

//Utilisez le système d'autowire (instanciation automatique) de Symfony dans les controleurs pour récupérer les instance des repository dont vous avez besoin
//Rajoutez des commentaires pour expliquer le fonctionnement

class CocktailController extends AbstractController
{
	#[Route('/cocktails', name: 'list-cocktails')]  //je créais une route pour la page d'accueil "list-cocktails"
    public function displayListCocktails(CocktailsRepository $cocktailsRepository): Response  //système autowire automatique $request
    {
		$cocktails = $cocktailsRepository->findAll();  //je récupère la liste des cocktails dans le repository

		return $this->render('list-cocktails.html.twig', ["cocktails" => $cocktails]);  //je renvoie la liste des cocktails à la vue list-cocktails.html.twig

	}

    #[Route('/single-cocktail/{id}', name: 'single-cocktail')]  //je créais une route pour la page d'accueil "single-cocktail" 
    public function displaySingleCocktail($id, CocktailsRepository $cocktailsRepository): Response  //je recupère l'id du cocktail dans l'url et je le passe en paramètre de la fonction
    {
		$cocktails = $cocktailsRepository->findOneById($id);  //je récupère le cocktail dans le repository en fonction de l'id passé en paramètre
        
        return $this->render('single-cocktail.html.twig', [  //je renvoie le cocktail à la vue single-cocktail.html.twig
            'cocktail' => $cocktails  
        ]);
	}

    //Dans le dossier entity, créez une classe Cocktail. Ajoutez dans cette classe les propriétés d'un cocktails : id, name, description, ingredients, image, createdAt, isPublished
    //Dans cette classe, créez une fonctionconstructeur qui prend en parametre : name, description, ingredients, image et qui stocke dans les propriétés les name, description, ingredients, image  récupérées + qui stocke dans l'id la valeur"5", dans createdAt la date du jour et dans isPublished la valeur "true"
    
    #[Route('/create-cocktail', name: 'create-cocktail')]  //je créais une route pour la page d'accueil "create-cocktail"
    public function createCocktail(): Response  //je créais une route pour la page d'accueil "create-cocktail"
    {
        $name = 'Gin tonic';  //je récupère le nom du cocktail dans le formulaire
        $ingredients = 'gin, tonic, concombre, citron';  //je récupère les ingrédients du cocktail dans le formulaire
        $description = 'Un cocktail rafraîchissant et pétillant';  //je récupère la description du cocktail dans le formulaire
        $image = 'https://assets.bacardicontenthub.com/transform/59d13984-089c-471f-95fb-1343c51ad9e9/FY22_St-Germain_Marketing_Asset_GinTonic_ZIC?io=transform:fit,width:400,height:500&format=png&quality=75';
        
        $cocktail = new Cocktail($name, $description, $image, $ingredients);  //je crée un nouveau cocktail avec les paramètres passés en paramètre de la fonction
        
        dd($cocktail);  //je dump le cocktail pour voir si il est bien créé

        return $this->render('create-cocktail.html.twig', [  //je renvoie le cocktail à la vue create-cocktail.html.twig
            'cocktail' => $cocktail  
        ]);
}
}