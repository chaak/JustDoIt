<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jakub
 * Date: 12.04.2017
 * Time: 09:44
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Recipe;
use AppBundle\Form\RecipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AddRecipeController extends Controller
{
    /**
     * @Route("/{_locale}/form")
     */
    public function recipeAction(Request $request)
    {
        // 1) build the form
        $recipe = new Recipe();
        $form = $this->createForm(RecipeType::class, $recipe);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            // 3) Encode the password (you could also do this via Doctrine listener)
//            $password = $this->get('security.password_encoder')
//                ->encodePassword($user, $user->getPassword());
//            $user->setPassword($password);
//
//            // 4) save the User!
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($user);
//            $em->flush();
//
//            // ... do any other work - like sending them an email, etc
//            // maybe set a "flash" success message for the user
//
//            return $this->redirect('http://127.0.0.1:8000/en/form');
//        }

        return $this->render(
            'default/form.html.twig',
            array('recipe' => $form->createView())
        );
    }
}