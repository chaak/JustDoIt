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
//        return new Response('Saved new product with id '.$recipe->getId());
//    }

    public function showAction($productId)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        // ... do something, like pass the $product object into a template
    }

//    public function showAction()
//    {
//       return $this->render('default/index.html.twig');
//    }

}