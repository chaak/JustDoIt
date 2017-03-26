<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jakub
 * Date: 21.03.2017
 * Time: 15:41
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     * @param Request $request
     * @return Response
     */


    public function numberAction(Request $request)
    {

        $request->setLocale('pl');
        return $this->render('lucky/number.html.twig');

    }

}





