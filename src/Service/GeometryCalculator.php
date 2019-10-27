<?php

namespace App\Service;

class GeometryCalculator{
	public static function SurfaceSum($p1,$p2){
		$total = $p1+$p2;
		return round($total,2);
		
	}
	
	public static function CircumferenceSum($o1,$o2){
		$total = $o1+$o2;
		return round($total,2);
	}
	
}