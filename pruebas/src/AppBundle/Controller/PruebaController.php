<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request){
        
    $alumnos=array(
                array('nombre'=>"neuen",'apellido'=>"mobilia",'cuil'=>"20374408632"),
                array('nombre'=>"juian",'apellido'=>"baez",'cuil'=>"23387312609"),
                array('nombre'=>"Juan Roman",'apellido'=>"Riquelme",'cuil'=>"20267528692"),
                array('nombre'=>"Marcelo",'apellido'=>"Tinelli",'cuil'=>"20132146234"),
                array('nombre'=>"Carlos",'apellido'=>"Menem",'cuil'=>"20067050666"),
                array('nombre'=>"Ricardo",'apellido'=>"Fort",'cuil'=>"20205675338"),
                array('nombre'=>"Mauri",'apellido'=>"Macri",'cuil'=>"20131204699"),
                array('nombre'=>"Diego",'apellido'=>"Maradona",'cuil'=>"23142765799")
        );
    
    return $this->render("AppBundle:pruebas:index.html.twig", array(
            "alumnos"=>$alumnos
        ));
}
}
