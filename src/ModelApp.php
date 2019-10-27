<?php

namespace App;

class ModelApp{
	public static function Calculator($data,$type){
//option circle:
		if($type == "circle"){
			$r = $data;
			$p = pow($r,2)*3.14;
			$o = 2*$r*3.14;
			//part for creating result array:
			$result = array(
			  'type' => 'circle',
			  'radius'=> $r,
			  'surface'=> $p,
			  'circumference'=> round($o,2));
		}
//option triangle:
		if($type =="triangle"){
			$a = $data[0];
			$b = $data[1];
			$c = $data[2];
		//part for calculate of circumference $o and surface $p:
		$o = $a+$b+$c;
		$s = $o/2; 
		$p = sqrt($s*($s-$a)*($s-$b)*($s-$c));
		
		//part for creating result array:
		$result = array(
		  'type' => 'triangle',
		  'a'=> $a,
		  'b'=> $b,
		  'c'=> $c,
		  'surface'=> $p,
		  'circumference'=> round($o,2));
		}
				
	return $result;
	}
}