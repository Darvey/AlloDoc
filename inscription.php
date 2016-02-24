<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <link rel="stylesheet" href="stylesheets/connect.css"/>
  <link rel="stylesheet" href="stylesheets/normalize.css"/>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
   <script type='text/javascript' src="js/rotateForm.js"></script>
   <script type='text/javascript' src="js/formulaireCacher.js"></script>
</head>

<body>

<header  onclick = "rotate180()">
   <a class="title" href="index.php"> Allodoc. </a>
</header>

<div class='infosInscription'>
   <h1> Inscription </h1>
   <p>L’inscritption ne prend qu’une minute ! pour cela, rien de plus simple,<br/>
   il vous suffit de remplir ce formulaire.</p>
   <p>  *L’adresse mail nous sert à vous communiquer des informations<br/>
      importantes sur vos rendez-vous. Nous ne la communiquerons à aucun tiers.</p></br>
   <a href="#" class="link-connect" onclick="rotate180()"> Déjà inscrit ? </a>
</div>

<div class='infosConnexion'>
   <h1>Mon compte</h1>
   <a href="#" class="link-inscription" onclick="rotate180()"> Pas encore inscrit ? </a>
</div>

<div class="switcher" >

   <form action="traitement.php" method="post" class="inscription-form">
      <fieldset>
         <label for="prenom">Nom </label>
         <input type="text" name="s_nom">
      </fieldset>

      <fieldset>
         <label for="prenom">Prenom </label>
         <input type="text" name="s_prenom">
      </fieldset>

      <fieldset>
         <label for="ville">Ville </label>
         <input type="text" name="s_city"/>
      </fieldset>

      <fieldset>
         <label for="ville">Adresse </label>
         <input type="text" name="s_adress"/>
      </fieldset>

      <fieldset>
         <label for="mail">Mail </label>
         <input type="text" name="s_mail"/>
      </fieldset>

      <fieldset>
         <label for="pass">Mot de passe </label>
         <input type="password" name="s_pass"/>
      </fieldset>

	  <fieldset>
		<input style="margin: -90px" type="checkbox" id="medecin" name="medecin" onclick="cacherField()" >Je suis un médecin<br>
	  </fieldset>

	  <fieldset id="spe" style="visibility:hidden;">
         <label for="pass">Spécialité </label>
         <input type="text" name="s_spé"/>
      </fieldset>

      <fieldset>
         <input class = "button-connect" type="submit" name="Inscription" value="Inscription"/>
      </fieldset>
   </form>

   <form action="traitement.php" method="post" class="connect-form">
      <fieldset>
         <label for="prenom"> Mail </label>
         <input type="text" name="s_mail">
      </fieldset>

      <fieldset>
         <label for="pass"> Mot de passe </label>
         <input type="password" name="s_pass"/>
      </fieldset>

	  <fieldset>
		<input style="margin: -90px" type="checkbox" id="medecin" name="medecin" onclick="cacherField()" >Je suis un médecin<br>
	  </fieldset>

      <fieldset>
         <input class = "button-connect" type="submit" name="Connexion" value="Connexion"/>
      </fieldset>
   </form>

</div>



</body>

<!--
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>
   from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>
   is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"
   title="Creative Commons BY 3.0">CC BY 3.0</a>
</div>
-!>
