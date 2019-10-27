<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\GeometryCalculator;
use App\ModelApp;



class MainController{
//method for triangle:

	public function triangle($a,$b,$c){
	$data = array($a,$b,$c);
//run ModelApp for calculate surface $p and circumference $o of triangle:
	$result = ModelApp::calculator($data,"triangle");
//part for creating json reuslt:	  
	return  new JsonResponse($result);
	}
	
//method for circle:

	public function circle($r){
///run ModelApp for calculate surface $p and circumference $o of circle:
		$result = ModelApp::calculator($r,"circle");
//part for creating json reuslt:	  
	return  new JsonResponse($result);
	}
	
//method for service test:	
	public function test(){
		//for triangle:
		$a = 2;
		$b = 2;
		$c = 3;
		$triangle = ModelApp::calculator(array($a,$b,$c),"triangle");
		$p1 = $triangle["surface"];
		$o1 = $triangle["circumference"];
		//for circle:
		$r = 2;
		$circle = ModelApp::calculator($r,"circle");
		$p2 = $circle["surface"];
		$o2 = $circle["circumference"];
		//run service model for surface sum:
		$result_p = GeometryCalculator::SurfaceSum($p1,$p2);
		//for service model for circumference sum:
		$result_o = GeometryCalculator::CircumferenceSum($o1,$o2);
		//total result:
		$result = array("surface sum"=> $result_p,
						"circumference sum"=> $result_o
						);
		return new JsonResponse($result);
	}

}