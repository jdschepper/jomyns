<?php
// Expiration date of the cookie is set to 1 week
if (isset($_COOKIE["jomyns_lang"]))
{
	if ($_COOKIE["jomyns_lang"] == "en")
		include ("index_en.php");
	else if ($_COOKIE["jomyns_lang"] == "nl")
		include ("index_nl.php");
	else if ($_COOKIE["jomyns_lang"] == "fr")
		include ("index_fr.php");
	else if ($_COOKIE["jomyns_lang"] == "de")
		include ("index_de.php");
}
else
{
	// Include header
	include("header.html");
?>
<table width="754" border="0" cellpadding="0" cellspacing="0">
	<tr bgcolor="#CCCC99">
		<td>
			<CENTER>
			<img src="images/frontpage.jpg" width="754" height="350" alt="Welcome!"><BR>
			<a href="index_en.php">Choose your language</A> -
			<a href="index_nl.php">Kies uw taal</A> -
			<a href="index_fr.php">Choisissez votre langue</A> -
			<a href="index_de.php">Wahlen Sie Ihre Sprache</A><BR>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT="">
			</CENTER>
		</td>
	</tr>
</table>
<?php
	// Include header
	include("footer.html");
}
?>