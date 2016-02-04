<?php
  require_once 'includes/htmlElmt.php';

  displayHead("Connect");
  echo '<body>';
  displayHeader();
?>


<div id = "form-connect">
  <div class ="bloc-connect">
    <form method="post" action="traitement.php">
           <label for="email">Email </label>
           <input type="text" name="s_mail" id="s_mail" />
           <br />
           <label for="pass">Mot de passe </label>
           <input type="password" name="s_pass" id="s_pass" />
		   <input type="submit" name="Envoyer" value="Connection" />
    </form>
  </div>

  <div class = "bloc-inscription">
	<a href="inscription.php"> Inscription </a>
  </div>
</div>

<?php
  displayFooter();
?>

</body>
</html>

<!--
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>
   from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>
   is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"
   title="Creative Commons BY 3.0">CC BY 3.0</a>
</div>
-!>
