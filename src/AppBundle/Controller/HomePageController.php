<?php
/**
 * Created by PhpStorm.
 * User: JakubWitczak
 * Date: 20.03.2017
 * Time: 20:18
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
=======
use AppBundle\Entity\User;
>>>>>>> 367b5f93330b76668bd5a8e8c26975576cd794c8
use AppBundle\Entity\Recipe;

class HomePageController extends Controller
{
    /**
<<<<<<< HEAD
     * @Route("/{_locale}/homepage")
     */

//    public function createAction(){
//        $recipe = new Recipe();
//        $recipe->setTitle("Shrimp and Black Bean Quesadilla");
//        $recipe->setDescription("This mexican fusion appetizer is bound to be a
//                  hit at any party.");
//
//        $em = $this->getDoctrine()->getManager();
//
//        // tells Doctrine you want to (eventually) save the Product (no queries yet)
//        $em->persist($recipe);
//
//        // actually executes the queries (i.e. the INSERT query)
//        $em->flush();
//
//        return new Response('Saved new product with id '.$recipe->getId());
//    }
=======
     * @Route("/{_locale}/addRecipe")
     */

    public function createAction(){

        $ingredient1 = new Ingredient();
        $ingredient2 = new Ingredient();
        $ingredient3 = new Ingredient();
        $ingredient4 = new Ingredient();
        $ingredient1->setName("cheese");
        $ingredient1->setAmount("100 gram");
        $ingredient2->setName("Not cheese");
        $ingredient2->setAmount("100 gram");
        $ingredient3->setName("Paprika");
        $ingredient3->setAmount("1000 gram");
        $ingredient4->setName("Not fckn cheese");
        $ingredient4->setAmount("2100 gram");

        $recipe = new Recipe();
        $recipe->setTitle("TestRecipe");
        $recipe->setDescription("RandomDescription");
        $recipe->setIngredients(array($ingredient1, $ingredient2,$ingredient3,$ingredient4));

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($recipe);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new product with id '.$recipe->getId());
    }

//    /**
//     * @Route("/{_locale}/login")
//     */
//    public function loginAction()
//    {
//
//        $user = new User();
//
//        $user ->setLogin("Provide Your Login");
//        $user ->setPassword("Provide Your Password");
//        $user ->setEmail("Provide Your E-mail");
//
//        $form = $this->createFormBuilder($user )
//            ->add('Login', TextType::class)
//            ->add('Password', TextType::class)
//            ->add('Email', TextType::class)
//            ->add('save', SubmitType::class, array('label' => 'Create User'))
//            ->getForm();
//
//        return $this->render('default/login.html.twig', array(
//            'login' => $form->createView(),
//        ));
//    }

    /**
     * @Route("/{_locale}/form")
     */
    public function formAction()
    {

        $recipe = new Recipe();
        $recipe->setTitle('Write a blog post');
        $recipe->setDescription("siemaneczko");
>>>>>>> 367b5f93330b76668bd5a8e8c26975576cd794c8

    public function showAction()
    {
<<<<<<< HEAD
        $id = 2;
=======
        $id = 7;
>>>>>>> 367b5f93330b76668bd5a8e8c26975576cd794c8
        $recipe = $this->getDoctrine()->getRepository('AppBundle:Recipe')->find($id);
        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe found for id '.$id
            );
        }

       return $this->render('default/index.html.twig',array('recipes'=>$recipe));
    }

}