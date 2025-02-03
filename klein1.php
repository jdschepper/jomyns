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
			<table id="Table_01" width="754" height="400" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<a href="klein7_det.php"><img src="images/klein1_01.gif" width="413" height="400" alt="" border="0"></a></td>
					<td>
						<a href="klein11_det.php"><img src="images/klein1_02.gif" width="341" height="400" alt="" border="0"></a></td>
				</tr>
			</table>
			<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			<IMG SRC="images/bottom.jpg" WIDTH=754 HEIGHT=35 ALT="">
	</TR>
</TABLE>
<?php
// Include footer
include("footer.html");
?>
