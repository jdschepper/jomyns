<?php
// Expiration date of the cookie is set to 1 week
if (!isset($_COOKIE["jomyns_lang"])) 
	setcookie ("jomyns_lang", "en", time()+604800);

// Include header and gallery menu
include("header.html");
include("gallery_menu.html");
?>
<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<A HREF="klein2_det.php">
			<IMG SRC="images/klein3.jpg" WIDTH=754 HEIGHT=400 ALT="" BORDER="0"></A><BR>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT="">
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
