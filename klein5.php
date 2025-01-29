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
		<TD COLSPAN=2>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<img SRC="images/klein5_01.jpg" WIDTH=461 HEIGHT=400 ALT=""></td>
		<td>
			<A HREF="klein8_det.php">
			<img SRC="images/klein5_02.jpg" WIDTH=293 HEIGHT=400 BORDER=0 ALT=""></A></td>
	</TR>
	<TR>
		<TD COLSPAN=2>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT=""></TD>
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
