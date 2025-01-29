<?php
exit();

// Set generic mail properties
$email = "myns@skynet.be";
// $email = "jacques.deschepper@artwork-systems.com";
$continue = "index2.php";
$subject = "[Website] Vraag om meer informatie";
$headers = "From: jomyns@homejack.net\n" . "Return-Path: jomyns@homejack.net\n" . "Reply-To: " .  $_POST["formemail"] . "\n";

// Construct email body
$message = "Ik wens meer informatie over:\n";
if ($_POST["formlarg"] == "on")
	$message .= "- Grote beelden\n";
if ($_POST["formsmal"] == "on")
	$message .= "- Kleine beelden\n";
if ($_POST["formexpo"] == "on")
	$message .= "- Geplande Exposities\n";
$message .= "\nExtra commentaar :\n\n" . $_POST["formcomm"] . "\n\nMijn gekozen taal is ";
if ($_COOKIE["jomyns_lang"] == "en")
	$message .= "engels.\n\n";
if ($_COOKIE["jomyns_lang"] == "nl")
	$message .= "nederlands.\n\n";
if ($_COOKIE["jomyns_lang"] == "de")
	$message .= "duits.\n\n";
if ($_COOKIE["jomyns_lang"] == "fr")
	$message .= "frans.\n\n";
$message .= "E-mail adres: " . $_POST["formemail"] ."\n";

// Send the message
if (!mail($email,$subject,$message,$headers))
{
	echo "Delivery Failed!";
	die ();
}

// Display resulting page
include("header.html");
?>

<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR BGCOLOR="#CCCC99">
		<TD>
			<CENTER>
				<IMG SRC="images/top.jpg" WIDTH=754 HEIGHT=33 ALT=""><BR>
				<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
<?php
include("$language/process.html");
?>
				<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
				<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT="">
			</CENTER>
		</TD>
	</TR>
</TABLE>

<?php
// Footer
include ("footer.html");
?>