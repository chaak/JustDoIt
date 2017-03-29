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
use AppBundle\Entity\Recipe;

class HomePageController extends Controller
{
    /**
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