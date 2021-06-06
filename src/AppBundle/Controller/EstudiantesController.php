<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Estudiantes;

class EstudiantesController extends Controller
{
    /**
     * @Route("/insert/estudiante", name="insert_est")
     */

     public function InsertEst(){

        $Estudiantes = new Estudiantes();
        $Estudiantes -> setnombreEst('Juan');
        $Estudiantes -> setEdad('12');
        $Estudiantes -> setGrado('1');

        $em = $this->getDoctrine()->getManager();
        $em->persist($Estudiantes);
        $em->flush();

        return new Response('ID: '.$Estudiantes->getId());
     }
}
