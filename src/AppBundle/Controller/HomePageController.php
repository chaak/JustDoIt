<?php
/**
 * Created by PhpStorm.
 * User: JakubWitczak
 * Date: 20.03.2017
 * Time: 20:18
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ingredient;
use AppBundle\Form\RecipeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Recipe;
use Symfony\Component\HttpFoundation\Request;


class HomePageController extends Controller
{
    /**
     * @Route("/{_locale}/addRecipe")
     */

    public function newAction(Request $request)
    {
        $recipe = new Recipe();

        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example
        $ingredient1 = new Ingredient();
        $ingredient1->setName('ingredient1');
        $recipe->getIngredients()->add($ingredient1);
        $ingredient2 = new Ingredient();
        $ingredient2->setName('ingredient2');
        $recipe->getIngredients()->add($ingredient2);
        // end dummy code

        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects
        }

        return $this->render('AppBundle:Recipe:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

//    /**
//     * @Route("/{_locale}/login")
//     */
//    public function loginAction()
//    {

//    public function createAction(){
//        $recipe = new Recipe();
//        $recipe->setTitle("Shrimp and Black Bean Quesadilla");
//        $recipe->setDescription("This mexican fusion appetizer is bound to be a
//                  hit at any party.");

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
        $recipe->setTitle('Recipe Title');

        $form = $this->createFormBuilder($recipe)
            ->add('Title', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Recipe'))
            ->getForm();

        return $this->render('default/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{_locale}/homepage")
     */
    public function showAction()
    {

        $id = 2;
        $recipe = $this->getDoctrine()->getRepository('AppBundle:Recipe')->find($id);
        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe found for id '.$id
            );
        }

       return $this->render('default/index.html.twig',array('recipes'=>$recipe));
    }

}