<?php
// Expiration date of the cookie is set to 1 week
if (!isset($_COOKIE["jomyns_lang"])) 
	setcookie ("jomyns_lang", "en", time()+604800, '/');

// Include header and gallery menu
include("header.html");
?>
<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR BGCOLOR="#CCCC99">
		<TD>
			<CENTER>
				<IMG SRC="images/top.jpg" WIDTH=754 HEIGHT=33 ALT=""><BR>
				<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
<?php
// Localized form
include("$language/contact.html");
?>
				<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
				<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT="">
			</CENTER>
		</TD>
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
