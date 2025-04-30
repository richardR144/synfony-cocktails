<?php

namespace App\Controller;

use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'list-categories')]
    public function displayListCategories(CategoriesRepository $categoriesRepository): Response
    {
		$categories = $categoriesRepository->findAll();

        return $this->render('list-categories.html.twig', [
            'category' => $categories
        ]);
    }

	
    #[Route('/categories/{id}', name: 'show-categories')]  //je créais une route pour la page d'accueil "show-categories"
    public function displayShowCategories($id, CategoriesRepository $categoriesRepository): Response  //je recupère l'id de la catégorie dans l'url et je le passe en paramètre de la fonction
    {
		$category = $categoriesRepository->findOneById($id);  //je récupère la catégorie dans le repository en fonction de l'id passé en paramètre

        return $this->render('show-categories.html.twig', [  //je renvoie la catégorie à la vue single-categories.html.twig
            'categories' => $category
        ]);
    }   
} 
