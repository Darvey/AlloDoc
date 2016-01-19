<?php
  require_once 'includes/htmlElmt.php';

  displayHead("connect");
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
    </form>
  </div>

  <div class = "bloc-inscription">
  </div>
</div>

<?php
  displayFooter();
?>

</body>
</html>
