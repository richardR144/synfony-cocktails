<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'list-categories')]
    public function displayListCategories(): Response
    {
        $categories = new CategoriesRepository();
		$categories = $categories->findAll();

        return $this->render('list-categories.html.twig', [
            'categories' => $categories
        ]);
    }
}
	


class ShowCategoryController extends AbstractController
{
    #[Route('/categories/{$id}', name: 'show-categories')]
    public function displayShowCategories($id): Response
    {
        
		$categories = new CategoriesRepository();
		$categories = $categories->findAll();

        return $this->render('single-categories.html.twig', [
            'categories' => $categories[$id],
        ]);
    }   
} 
