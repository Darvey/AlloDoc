<?php
   require_once 'includes/requete.php';
	session_start();
?>

<head>
  <meta charset="utf-8">
  <title>Compte</title>
  <link rel="stylesheet" href="stylesheets/comptePatient.css"/>
  <link rel="stylesheet" href="stylesheets/normalize.css"/>


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
   <script type='text/javascript' src="js/rotateForm.js"></script>
   <script type='text/javascript' src="js/scrollHeaderMedecin.js"></script>
</head>

<body>

   <header>
      <a class="title" href="index.php"> Allodoc. </a>
	  <a class="deconnexion" href="deconnection.php" >Se déconnecter</a>
   </header>

   <section>
      <h1> Mes informations</h1>
      <?php
         echo 'Nom : '.$_SESSION['nom'].'<br>';
         echo 'Prenom : '.$_SESSION['prenom'].'<br>';
      ?>
      <h1> Mes rendez vous </h2>
      <?php
         $arrayRDV = getRDVbyPatientId($_SESSION['id']);
         foreach ($arrayRDV as $key) {
            echo 'Rendez-Vous le '.$key['jour'].' à '.$key['heure'].' avec le Dr ';
            $drInfos = getMedecinById($key['idMedecin']);
            echo $drInfos['m_prenom'].' '.$drInfos['m_nom'].'<br>';
         }

      ?>
   </section>

</body>
