<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home/index.html.twig');
    }

     /**
     * @Route("/registro/{k}", name="Registro")
     */
    public function Registro($k)
    {
        // replace this example code with whatever you need
        return $this->render('registro/registro.html.twig', array(
            'k' => $k
        ));
    }

     /**
     * @Route("/editar/{k}", name="Editar")
     */
    public function Editar($k)
    {
        // replace this example code with whatever you need
        return $this->render('edicion/edit.html.twig', array(
            'k' => $k
        ));
    }
}
