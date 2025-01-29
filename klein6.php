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
		<TD COLSPAN="2">
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<A HREF="klein6_det.php">
			<IMG SRC="images/klein6_1.jpg" WIDTH=506 HEIGHT=400 ALT="" BORDER="0"></A></TD>
		<TD>
			<A HREF="klein5_det.php">
			<IMG SRC="images/klein6_2.jpg" WIDTH=248 HEIGHT=400 ALT="" BORDER="0"></A></TD>
	</TR>
	<TR>
		<TD COLSPAN="2">			
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT=""></TD>
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
