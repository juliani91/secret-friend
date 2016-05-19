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
  <link rel="stylesheet" href="css/styles.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="">
	  <div class="container">
	  		<div class="eight columns offset-by-two">
	  			<div class="logo">
	  				<a href="#"> <img src="http://placehold.it/88x88"> </a>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="container">
	  		<div class="eight columns offset-by-two headertext">
	  			<h1>Secret Friend Generator</h1>
	  			<p>Just Use &nbsp; <del>Paper</del> &nbsp; E-mails</p>
	  		</div>
	  		   <div class="row">
			      <div class="six columns alpha header-btn left-btn">
			          <a href="#" id="toBegin">Get Started</a>
			      </div>
			        <div class="six columns omega header-btn right-btn">
			          <a href="#">Github</a>
			      	</div>
			    </div>
	  	</div>
	  	<div class="container">
	  		<div class="eight columns offset-by-two">
	  			<div class="arrow">
	  			<a href="#" id="toBegin2"><img class="arrowImg " src="images/arrowdown-icon.svg"></a>
	  			</div>
	  		</div>
	  	</div>
  </header>

  <!-- Main program starts -->

  <main role="main">
  	<section class="mainSection" id="getStarted">
	  	<div class="container">
	  		<div class="eight columns offset-by-two headerMain">
	  			<h2>Let's Begin</h2>
	  			<p>Select the amount of participants and click generate.</p>
	  		</div>
	  	</div>
	  	<div class="container">
	  		<div class="eight columns offset-by-two">

			<!-- select menu accessed from jquery -->
			    <div id="small_form" class="menu">
			        <select id="allOptions">
			            <option value="3">3</option>
			            <option value="4">4</option>
			            <option value="5">5</option>
			            <!-- <option value="6">6</option>
			            <option value="7">7</option>
			            <option value="8">8</option>
			            <option value="9">9</option>
			            <option value="10">10</option> -->
			        </select>
			        <input type="button" value="Generate" id="btn1" class="generate-btn">
			    </div>
			    <h5>Recommendations:</h5>
			    <ul>
			    	<li>Don't capitalize E-mails</li>
			    	<li>Verify that your input is correct</li>
			    	<li>You can start over by clicking the start over button</li>
			    </ul>
	  		</div>
	  	</div>
  	</section>
  	<!-- Section where user has to input the information -->

  	<section class="usrInput" id="inputBegin">
  		<div class="container">
  			<div class="eight columns offset-by-two">
  				<h2>E-mails and Names</h2>
  				<p>Enter the appropriate information in the fields.</p>
  			<!-- Append inputs to the form from jquery -->
			    <form name="form1" >
			        <div id="firstForm" >
			        	<div class="container">
			        		<div class="twelve columns appendHere"></div>
			            </div>
			            <div class="container">
			            	<div class="eight columns offset-by-two centering">
			            		<input type="button" value="Send" id="send-btn" class="send-btn-class">
			            	</div>
			            </div>
			        </div>
			    </form>
  			</div>
  		</div>
  	</section>

  	<!-- End of user input -->

  </main> <!-- End of main section of the document -->


  <!-- Footer -->
  <footer>
  	<div class="container">
  		<div class="eight columns offset-by-two">
  			<span>Secret Friend Generator &copy;</span>
  		</div>
  	</div>
  </footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
