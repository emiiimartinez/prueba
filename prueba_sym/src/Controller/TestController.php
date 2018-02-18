<?php
namespace App\Controller;//va siempre para poder usar el use

use Symfony\Component\HttpFoundation\Response;//use App\Controller\TestController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Persona;

class TestController extends Controller
{
    /**
    * @Route("/")
    */
    public function number()
    {
        $number = mt_rand(0, 100);
        return new Response('<html><body>Lucky number: '.$number.'</body></html>');
    }
    /**
    * @Route("/twig")
    */
    public function ejemploTwig()
    {
        return $this->render('TestController/ejemplo.html.twig', array( 'var' => "esto es un ejemplo"));
    }
    /**
    * @Route("/base")
    */
    public function ejemploBD()
    {
        $persons = $this->getDoctrine()->getRepository(Persona::class)->findAll();
        if (!$persons) 
        {
            throw $this->createNotFoundException('No hay personas en la BD');
        }
        else
        {
            $em = $this->getDoctrine()->getManager();
            //$persona= new Persona();//para crear una persona 
            //$persona->setNombre("nati");
            //$em->persist($persona);
            //$em->flush();
            return $this->render('TestController/personas.html.twig', array( 'var' => "personas en la BD", 'persons'=>$persons));
        }
    }
}
