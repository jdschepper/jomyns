<?php
// Expiration date of the cookie is set to 1 week
if (!isset($_COOKIE["jomyns_lang"])) 
	setcookie ("jomyns_lang", "en", time()+604800);

// Include header and gallery menu
include("header.html");
?>
<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<A HREF="klein2.php">
			<IMG SRC="images/klein1_det.jpg" BORDER=0 WIDTH=754 HEIGHT=515 ALT="">
			</A>	
		</TD>
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
