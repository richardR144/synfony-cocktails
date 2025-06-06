<?php

namespace App\Controller;

class CategoriesRepository {
    public function findAll() {
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

        return $categories;
    }

    public function findOneById($id) {
		$categories = $this->findAll();
		$categories = $categories[$id];
		
		return $categories;
	}
}
