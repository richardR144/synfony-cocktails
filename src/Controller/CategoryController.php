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

	
    #[Route('/categories/{id}', name: 'show-categories')]
    public function displayShowCategories($id, CategoriesRepository $categoriesRepository): Response
    {
		$category = $categoriesRepository->findOneById($id);

        return $this->render('single-categories.html.twig', [
            'category' => $category
        ]);
    }   
} 
