<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Materias;

class MateriasController extends Controller
{
    /**
     * @Route("/insert/materias", name="insert_est")
     */

    public function InsertMate(Request $request){
        if($request->isXmlHttpRequest())
        {
            $materia = $request->request->get('materia');

            //escribo la consuLta
            $Materias = new Materias();
            $Materias -> setnombreMateria($materia);
    
            $em = $this->getDoctrine()->getManager();
            $em->persist($Materias);
            $em->flush();

            //$resultado = $q->getResult();
            $resultado = array(
                'respuesta' => 'Exito'
            );
            //retorno
            return new JsonResponse($resultado);
        }

     }
}
