<?php
namespace App\Controller;

use App\Entity\Cocktail;  //j'importe la classe Cocktail
use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;  //j'importe la classe Request pour récupérer les données du formulaire

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
    public function createCocktail(Request $request): Response  //je créais une route pour la page d'accueil "create-cocktail"
    {
        

        if($request->isMethod('POST'))  //je vérifie si la méthode de la requête est POST
        {
           $name = $request->request->get('name');  //je récupère le nom du cocktail dans le formulaire
           $ingredients = $request->request->get('ingredients');  //je récupère les ingrédients du cocktail dans le formulaire
           $description = $request->request->get('description');  //je récupère la description du cocktail dans le formulaire
           $image = $request->request->get('image');  //je récupère l'image du cocktail dans le formulaire 
           $cocktail = new Cocktail($name, $description, $image, $ingredients);  //je crée un nouveau cocktail avec les paramètres passés en paramètre de la fonction
            
            //avant en php, on aurait dû formatter les données de la classe cocktail pour créer la requête SQL insert into pour enregistrer le cocktail en bdd
            //
           $this->addFlash('success', 'Cocktail créé avec succès !');  //j'ajoute un message flash de succès
        }

        //dd($cocktail);  //je dump le cocktail pour voir si il est bien créé
        //enregistre le cocktail en bdd 
    
        return $this->render('create-cocktail.html.twig' //je renvoie le cocktail à la vue create-cocktail.html.twig}
    );
}
//Dans le controleur de création de cocktail, vérifiez si le formulaire a été envoyé grâce à la classe Request
//Si oui, récupérez la valeur de chaque champs du form (toujours avec la classe Request)
//Utilisez ces valeurs pour créer un cocktail (instance de classe Cocktail)
//Et faites un dump de cocktail avec un die et au submit de form, vous verrez le cocktail créé dans la console, fais avec le code du haut if($request->isMethod('POST'))


}