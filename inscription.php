<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <link rel="stylesheet" href="stylesheets/connect.css"/>
  <link rel="stylesheet" href="stylesheets/normalize.css"/>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
   <script type='text/javascript' src="js/rotateForm.js"></script>
</head>

<body>

<header>
   <a class="title" href="index.php"> Allodoc. </a>
</header>

<img src="img/circle100.png" onclick = "rotate180()" >

<div id="switcher" >

   <form action="traitement.php" method="post" class="inscription-form">
      <fieldset>
         <label for="prenom">Prenom </label>
         <input type="text" name="s_prenom">
      </fieldset>

      <fieldset>
         <label for="nom">Nom </label>
         <input type="text" name="s_nom">
      </fieldset>

      <fieldset>
         <label for="pass">Mot de passe </label>
         <input type="password" name="s_pass"/>
      </fieldset>

      <fieldset>
         <label for="mail">Mail </label>
         <input type="text" name="s_mail"/>
      </fieldset>

      <fieldset>
         <label for="ville">Ville </label>
         <input type="text" name="s_city"/>
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
