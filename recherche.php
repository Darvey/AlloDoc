<?php
	require_once '/includes/config.php';
	require_once '/includes/displayPage.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>RDV</title>
	<link rel="stylesheet" type="text/css" href="../stylesheets/calendar.css" media="screen" />
</head>

<body>

<?php
	displayHeader();
?>
<div class = "blocRecherche">
	<form action="index.php" method="post" >
	<table align="center" border="0" cellspacing="0"  cellpadding="0">
		<tr>			
		<td class="warper">   
			<select name="spec" id="specialite">
			<option value="generaliste"> generaliste </option>
			<option value="chirurgien"> chirurgien </option>
			<option value="dentiste"> dentiste </option>
			<option value="ophtalmologue"> ophtalmologue </option>
			</select>
		</td>	
		<td><label><input type="text" name="adresse"></label></td>	 
		<td><img src="../img/icnSearch.svg" class ="icnRecherche"></td>
	</table>

</div>

<?php
	displayFooter();
?>

</body>
</html>