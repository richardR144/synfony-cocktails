<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;





class CocktailController extends AbstractController
{
	#[Route('/cocktails', name: 'list-cocktails')]
    public function displayListCocktails(): Response
    {
        
        $cocktails = [
			1 => [
				'id'            => 1,
				'nom'           => 'Mojito',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg', // photo libre de droits
				'ingredients'   => [
					'50 ml de rhum blanc',
					'½ citron vert (en quartiers)',
					'2 c.à.c. de sucre de canne',
					'8 feuilles de menthe fraîche',
					'Eau pétillante',
					'Glace pilée'
				],
				'date_creation' => '1942-01-01',
				'description'   => 'Classique cubain ultra-rafraîchissant mêlant menthe et citron vert.'
			],
		
			2 => [
				'id'            => 2,
				'nom'           => 'Margarita',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'50 ml de tequila',
					'25 ml de triple sec (Cointreau)',
					'25 ml de jus de citron vert frais',
					'Sel pour givrer le verre',
					'Glace'
				],
				'date_creation' => '1938-07-04',
				'description'   => 'Tequila, triple-sec et citron vert dans un verre givré de sel pour un équilibre acidulé-salé.'
			],
		
			3 => [
				'id'            => 3,
				'nom'           => 'Old Fashioned',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'60 ml de bourbon ou rye whisky',
					'1 morceau de sucre',
					'2 traits d’angostura bitters',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1880-05-15',
				'description'   => 'Icône des classiques : un whisky subtilement sucré et aromatisé aux bitters.'
			],
		
			4 => [
				'id'            => 4,
				'nom'           => 'Piña Colada',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'60 ml de rhum blanc',
					'90 ml de jus d’ananas',
					'30 ml de crème de coco',
					'Glaçons'
				],
				'date_creation' => '1954-08-16',
				'description'   => 'Spécialité portoricaine crémeuse et fruitée à base d’ananas et de coco.'
			],
		
			5 => [
				'id'            => 5,
				'nom'           => 'Negroni',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'30 ml de gin',
					'30 ml de vermouth rouge',
					'30 ml de Campari',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1919-06-01',
				'description'   => 'Amertume élégante et notes d’agrumes pour ce grand classique italien.'
			],
		];

		return $this->render('list-cocktails.html.twig', ["cocktails" => $cocktails]);

	}

    #[Route('/single-cocktail/{id}', name: 'single-cocktail')]
    public function displaySingleCocktail($id): Response
    {
        $cocktails = [
            1 => [
				'id'            => 1,
				'nom'           => 'Mojito',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg', // photo libre de droits
				'ingredients'   => [
					'50 ml de rhum blanc',
					'½ citron vert (en quartiers)',
					'2 c.à.c. de sucre de canne',
					'8 feuilles de menthe fraîche',
					'Eau pétillante',
					'Glace pilée'
				],
				'date_creation' => '1942-01-01',
				'description'   => 'Classique cubain ultra-rafraîchissant mêlant menthe et citron vert.'
			],
		
			2 => [
				'id'            => 2,
				'nom'           => 'Margarita',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'50 ml de tequila',
					'25 ml de triple sec (Cointreau)',
					'25 ml de jus de citron vert frais',
					'Sel pour givrer le verre',
					'Glace'
				],
				'date_creation' => '1938-07-04',
				'description'   => 'Tequila, triple-sec et citron vert dans un verre givré de sel pour un équilibre acidulé-salé.'
			],
		
			3 => [
				'id'            => 3,
				'nom'           => 'Old Fashioned',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'60 ml de bourbon ou rye whisky',
					'1 morceau de sucre',
					'2 traits d’angostura bitters',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1880-05-15',
				'description'   => 'Icône des classiques : un whisky subtilement sucré et aromatisé aux bitters.'
			],
		
			4 => [
				'id'            => 4,
				'nom'           => 'Piña Colada',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'60 ml de rhum blanc',
					'90 ml de jus d’ananas',
					'30 ml de crème de coco',
					'Glaçons'
				],
				'date_creation' => '1954-08-16',
				'description'   => 'Spécialité portoricaine crémeuse et fruitée à base d’ananas et de coco.'
			],
		
			5 => [
				'id'            => 5,
				'nom'           => 'Negroni',
				'image'         => 'https://www.c6bo-plongee.fr/wp-content/uploads/2024/10/c6bo-voyage-blog-plongee-recettes-meilleurs-cocktails-Mai-Tai-steven-miller.jpg',
				'ingredients'   => [
					'30 ml de gin',
					'30 ml de vermouth rouge',
					'30 ml de Campari',
					'Zeste d’orange',
					'Glaçon gros format'
				],
				'date_creation' => '1919-06-01',
				'description'   => 'Amertume élégante et notes d’agrumes pour ce grand classique italien.'
			],
		];

		$cocktail = $cocktails[$id];
        
        return $this->render('single-cocktail.html.twig', [
            'cocktail' => $cocktail
        ]);
	}
		
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
			]
		];

		$categorie = $categories;

		return $this->render('list-categories.html.twig', [
			'categories' => $categories
		]);
	}
	
	#[Route('/categories/{id}', name: 'show-categories')]
	public function displayShowCategories($id): Response
	{
		$categories = [
			1 => [
				'id' => 1,	
				'nom' => 'Cocktails',
				'description' => 'Les cocktails classiques sont des boissons alcoolisées qui ont résisté à l’épreuve du temps et qui sont devenues des incontournables dans le monde de la mixologie.'
			],
			2 => [
				'id' => 2,
				'nom' => 'Mocktails',
				'description' => 'Les cocktails modernes sont des créations contemporaines qui reflètent les tendances actuelles en matière de mixologie.'
			],
			3 => [
				'id' => 3,
				'nom' => 'Cocktails soft',
				'description' => 'Les cocktails sans alcool, également appelés mocktails, sont des boissons qui imitent les cocktails traditionnels mais sans l’alcool.'
			],
			4 => [
				'id' => 4,
				'nom' => 'Shooter',
				'description' => 'Les cocktails fruités sont des boissons qui mettent en avant les saveurs naturelles des fruits.'
			],
		];

		return $this->render('show-categories.html.twig', [
			'categorie' => $categories[$id]
		]);
	}		    
}
