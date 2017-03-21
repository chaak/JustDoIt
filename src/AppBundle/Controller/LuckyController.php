<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jakub
 * Date: 21.03.2017
 * Time: 15:41
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class LuckyController
{
    /**
     * @Route("/lucky/number")
     */

    public function numberAction()
    {
        $number  = mt_rand(0,100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

}





