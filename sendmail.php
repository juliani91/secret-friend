<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Raffle</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/animate.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <style type="text/css">
  html, body {
    height: 100%;
    background-color: #1A94EA;
    color: #ffffff;
}
body {
    margin: 0;
}
.flex {
    height: 100%;
    padding: 0;
    margin: 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
  </style>

</head>
<body>

		<div class="flex">
			<h3>Your Secret Friend Is On The Way.</h3>
			<h4>Thank you.</h4>
			<p>Redirecting you back to the main page...</p>
			<img src="images/spin.gif"/>
		</div>



<?php  

$params = json_decode($_GET['params']);

$params2 = json_decode($_GET['params2']);

shuffle($params);

for ($i=0; $i < sizeof($params); $i++) { 
	mail($params[$i], "Secret Friend Here" , "Your Secret Friend is: " . $params2[$i]);
}
?>

<script type="text/javascript">
var num = 5;
setInterval(function(){

	location.href="http://dummy-host2.localhost/";
	document.getElementsByTagName('BODY').innerHTML= num;
	num = num - 1;
}, 5000);

</script>

</body>
</html>