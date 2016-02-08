<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <link rel="stylesheet" href="stylesheets/compteMedecin.css"/>
  <link rel="stylesheet" href="stylesheets/normalize.css"/>


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
   <script type='text/javascript' src="js/rotateForm.js"></script>
   <script type='text/javascript' src="js/scrollHeaderMedecin.js"></script>
</head>

<body>

<?php
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

	<header>
		<a class="title" href="index.php"> Allodoc. </a>
	</header>

	<div class="header-menu">
		<a> Patients <img src="img/menu-cursor.png" class="menu-select1"/> </a>
		<a> Agenda <img src="img/menu-cursor.png" class="menu-select2"/> </a>
		<a> Mon compte <img src="img/menu-cursor.png" class="menu-select3"/> </a>
	</div>

	<section>
	</section>

	<div class="agenda-container">
		<a href=""><img src="img/pastButton.svg" class="lastButton"></a>
		<a href=""><img src='img/nextButton.svg' class="nextButton"></a>
		<div class="agenda-header">
			<div class ="agenda-header-day">
				Lundi <span>12</span>
			</div>
			<div class ="agenda-header-day">
				Mardi <span>13</span>
			</div>
			<div class ="agenda-header-day">
				Mercredi <span>14</span>
			</div>
			<div class ="agenda-header-day">
				Jeudi <span>15</span>
			</div>
			<div class ="agenda-header-day">
				Vendredi <span>16</span>
			</div>
			<div class ="agenda-header-day">
				Samedi <span>17</span>
			</div>
		</div>
		<div class="agenda-body">
         <table>
            <tr>

               <td>
                  <span class='rdv-time'> 8h30 </span>
                  <br>
                  <span class='rdv-name'> Mr Hassan Mountassir </span>
                  <hr>
                  <div class='rdv-hover'>
                  </div>
                  <span class='rdv-time'> 9h30 </span>
                  <br>
                  <span class='rdv-name'> Mr Hassan Mountassir </span>
                  <hr>
                  <div class='rdv-hover'>
                  </div>
                  <span class='rdv-time'> 10h00 </span>
                  <br>
                  <span class='rdv-name'> Mr Hassan Mountassir </span>
                  <hr>

               </td>

               <td>
                  <span class='rdv-time'> 8h30 </span>
                  <br>
                  <span class='rdv-name'> Mr Hassan Mountassir </span>
                  <hr>
                  <div class='rdv-hover'>
                  </div>
               </td>

               <td>
               </td>

               <td>
               </td>

               <td>
                  <span class='rdv-time'> 8h30 </span>
                  <br>
                  <span class='rdv-name'> Mr Hassan Mountassir </span>
                  <hr>
                  <div class='rdv-hover'>
                  </div>
                  <span class='rdv-time'> 11h00 </span>
                  <br>
                  <span class='rdv-name'> Mr Hassan Mountassir </span>
                  <hr>
                  <div class='rdv-hover'>
                  </div>
               </td>

               <td>
               </td>

            </tr>
         </table>
		</div>
	</div>

	<footer>
	</footer>

</body>
