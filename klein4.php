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
		<TD COLSPAN=3>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<A HREF="klein9_det.php">
			<IMG SRC="images/klein4_01.jpg" WIDTH=264 HEIGHT=400 BORDER=0 ALT=""></A></TD>
		<TD>
			<A HREF="klein3_det.php">
			<IMG SRC="images/klein4_02.jpg" WIDTH=223 HEIGHT=400 BORDER=0 ALT=""></A></TD>
		<TD>
			<IMG SRC="images/klein4_03.jpg" WIDTH=267 HEIGHT=400 BORDER=0 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT=""></TD>
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
