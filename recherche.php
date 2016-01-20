<?php
	require_once 'includes/config.php';
	require_once 'includes/htmlElmt.php';

	displayHead("Recherche");
	echo '<body>';
	displayHeader();
?>

	<div class = "blocRecherche">
		<form action="index.php" method="post" >
		<table align="center" border="0" cellspacing="0"  cellpadding="0">
			<td class="warper">
				<select name="spec" id="specialite">
				<option value="generaliste"> generaliste </option>
				<option value="chirurgien"> chirurgien </option>
				<option value="dentiste"> dentiste </option>
				<option value="ophtalmologue"> ophtalmologue </option>
				</select>
			</td>
			<td><label><input type="text" name="adresse"></label></td>
			<td><img src="img/icnSearch.svg" class ="icnRecherche"></td>
		</table>
	</div>


<?php
	displayFooter();
?>

</body>
</html>
