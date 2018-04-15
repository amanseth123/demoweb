<?php
$car = array('maruti',
	'honda',
	'audi',
	'BMW' );
for($i=0; $i<sizeof($car);$i++) {
	# code...
	echo $car[$i];
	echo "<br>";
}
//print_r($car);
echo "<br>";
$car = array(
	'car1'=>'maruti',
	'ndiedmwsbsi'=>'honda',
	'ndbeudgufjkei'=>'audi',
	'rifnrfrufbr'=>'BMW' );
echo $car[0];
print_r($car);
echo $car['car3'];
for($i=1; $i<sizeof($car)+1;$i++) {
	# code...
	echo $car['car'.$i];
	echo "<br/>";
}
$arrayk=array_keys($car);
for ($i=0; $i<sizeof($arrayk); $i+1) { 
	# code...
	echo $car[$arrayk[$i]];
	//echo"<br>";
}
foreach ($car as $key => $myCar) {
	# code...
	echo $key,"=>",$myCar,"<br>";
}
$a='hello';
$b='world';
$hello='hello hello';
$world='world world';
echo ${$a};
echo 'hii the value is $a';
echo "<br>";
echo "hii the value is $a";
?>