<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Articulo;
use AppBundle\Form\ArticuloType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction(Request $request)
    {


        //dejamos el buscador como acción principal .
        return $this->redirectToRoute('buscador', array('nombre' => '%'));

       // return new Response(dump($request));

    }

}
