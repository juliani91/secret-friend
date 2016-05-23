<?php  

$params = json_decode($_GET['params']);

$params2 = json_decode($_GET['params2']);

shuffle($params);

for ($i=0; $i < sizeof($params); $i++) { 
	echo $params[$i];
	echo $params2[$i];
	mail($params[$i], "Secret Friend Here" , "Your Secret Friend is: " . $params2[$i]);
}
?>