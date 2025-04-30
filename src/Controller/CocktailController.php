<?php
namespace App\Controller;

use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

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
}
