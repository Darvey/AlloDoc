<?php
	session_start();
	require_once 'includes/config.php';
	$month = false;
	$year = false;
	$day = null;

	if ( isset($_GET['m']) ){
	  $month = $_GET['m'];
	}
	if ( isset($_GET['y']) )  {
	  $year = $_GET['y'];
	}
	if ( isset ($_GET['d']) ){
	  $day = $_GET['d'];
	}
?>


<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <link rel="stylesheet" href="stylesheets/rdv.css"/>
  <link rel="stylesheet" href="stylesheets/normalize.css"/>


   <script src= 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
   <script type='text/javascript' src= 'js/rotateForm.js'></script>
   <script type='text/javascript' src='js/scrollHeaderMedecin.js'></script>
</head>

<body>

	<header>
		<a class="title" href="index.php"> Allodoc. </a>
	</header>


	<?php displayMedecin($day, 2); ?>

	<section>
		<form action="index.php" method="post" >
			<textarea name="nom" rows=4  placeholder="Ecrivez une courte description de vos symptomes ou la raison pour laquelle vous prennez rendez vous dans ce cadre"></textarea>
			<input type="submit" value="VALIDER"/>
		</form>
	</section>


</body>
