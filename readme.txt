#Route#

path: config/routes.yaml
has 3 routes:
	1. for triangle:
    path: /triangle/{a}/{b}/{c} 
   
	2. for circle:      path: /circle/{r}
    
	3. for service:     path: /test
 


#Controller#

path: src/Controller/MainController.php
has 3 methods: 
	1. triangle($a,$b,$c){ ... }
	* get data for the sides of a triangle and put it in array
	* run ModelApp::calculator(array($a,$b,$c),"triangle")
	* result return in Json format

	2. circle($r){ ... }
	* get data for radius of circle
	* run ModelApp::calculator($r,"circle")
	* result return in Json format

	3. test(){ ... }
	* run service GeometryCalculator::SurfaceSum($p1,$p2)
	   for surface sum
	* run service GeometryCalculator::CircumferenceSum($o1,$o2)
	   for circumference sum
	* result return in Json format

#Model#

path: src/ModelApp.php
has 1 method: Calculator($data,$type)
type : define option circle or triangle 
result : Array with data 
 
#Service#

path: src/Service/GeometryCalculator.php
has 2 methods: 
	1. SurfaceSum($p1,$p2){ ... }
	* get two surface values
	* result return sum of values
	
	2. CircumferenceSum($o1,$o2){ ... }
	* get two circumference values
	* result return sum of values
