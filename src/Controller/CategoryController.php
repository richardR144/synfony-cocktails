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
        $categories = [
			1 => [
				'id' => 1,	
				'nom' => 'Cocktails',
				'description' => 'Les cocktails classiques sont des boissons alcoolisées qui ont résisté à l’épreuve du temps et qui sont devenues des incontournables dans le monde de la mixologie. Ils sont souvent préparés avec des ingrédients simples et sont appréciés pour leur goût équilibré et leur présentation élégante.'
			],
			2 => [
				'id' => 2,
				'nom' => 'mocktails',
				'description' => 'Les cocktails modernes sont des créations contemporaines qui reflètent les tendances actuelles en matière de mixologie. Ils peuvent inclure des ingrédients innovants, des techniques de préparation uniques et des présentations artistiques.'
			],
			3 => [
				'id' => 3,
				'nom' => 'Cocktails soft',
				'description' => 'Les cocktails sans alcool, également appelés mocktails, sont des boissons qui imitent les cocktails traditionnels mais sans l’alcool. Ils sont parfaits pour ceux qui souhaitent profiter de saveurs complexes et rafraîchissantes sans les effets de l’alcool.'
			],
			4 => [
				'id' => 4,
				'nom' => 'shooter',
				'description' => 'Les cocktails fruités sont des boissons qui mettent en avant les saveurs naturelles des fruits. Ils peuvent être préparés avec des jus de fruits frais, des purées de fruits ou des liqueurs fruitées, offrant une expérience gustative rafraîchissante et sucrée.'
			],
		];

        return $this->render('list-categories.html.twig', [
            'categories' => $categories
        ]);
    }   
}