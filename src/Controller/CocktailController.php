<?php
namespace App\Controller;

use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;





class CocktailController extends AbstractController
{
	#[Route('/cocktails', name: 'list-cocktails')]
    public function displayListCocktails(): Response
    {
        
		$cocktailsRepository = new CocktailsRepository();
		$cocktails = $cocktailsRepository->findAll();

		return $this->render('list-cocktails.html.twig', ["cocktails" => $cocktails]);

	}

    #[Route('/single-cocktail/{id}', name: 'single-cocktail')]
    public function displaySingleCocktail($id): Response
    {
		$cocktailsRepository = new CocktailsRepository();
		$cocktails = $cocktailsRepository->findOneById($id);
        
        return $this->render('single-cocktail.html.twig', [
            'cocktail' => $cocktails
        ]);
	}	    
}
