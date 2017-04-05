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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Recipe;
use AppBundle\Entity\User;

class HomePageController extends Controller
{
    /**
     * @Route("/{_locale}/homepage")
     */

//    public function createAction(){
//        $recipe = new Recipe();
//        $recipe->setTitle("TestRecipe");
//        $recipe->setDescription("RandomDescription");
//
//        $em = $this->getDoctrine()->getManager();
//
//        // tells Doctrine you want to (eventually) save the Product (no queries yet)
//        $em->persist($recipe);
//
//        // actually executes the queries (i.e. the INSERT query)
//        $em->flush();
//
//        return new Response('Saved new product with login ' . $recipe->getLogin());
//    }
    /**
     * @Route("/{_locale}/login")
     */
    public function loginAction()
    {

        $user = new User();

        $user ->setLogin("Provide Your Login");
        $user ->setPassword("Provide Your Password");
        $user ->setEmail("Provide Your E-mail");

        $form = $this->createFormBuilder($user )
            ->add('Login', TextType::class)
            ->add('Password', TextType::class)
            ->add('Email', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create User'))
            ->getForm();

        return $this->render('default/login.html.twig', array(
            'login' => $form->createView(),
        ));
    }
        // ... do something, like pass the $product object into a template
    /**
     * @Route("/{_locale}/form")
     */
    public function formAction()
    {

        $recipe = new Recipe();
        $recipe->setTitle('Write a blog post');
        $recipe->setDescription("siemaneczko");

        $form = $this->createFormBuilder($recipe)
            ->add('Title', TextType::class)
            ->add('Description', TextType::class)
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
        $id = 1;
        $recipe = $this->getDoctrine()->getRepository('AppBundle:Recipe')->find($id);
        if (!$recipe) {
            throw $this->createNotFoundException(
                'No recipe found for id '.$id
            );
        }

       return $this->render('default/index.html.twig',array('recipes'=>$recipe));
    }



}