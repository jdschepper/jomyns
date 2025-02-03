<?php
// Include header and gallery menu
include("header.html");
include("gallery_menu.html");
?>

<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#CCCC99">
	<TR>
		<TD COLSPAN=3>
			<CENTER>
				<IMG SRC="images/spacer.jpg" WIDTH=754 HEIGHT=30 ALT=""><BR>
			</CENTER>
		</TD>
	</TR>
	<TR>
		<TD WIDTH="20"></TD>
		<TD WIDTH="*">
<?php
// Localized form
include("$language/gallery.html");
?>
		</TD>
		<TD WIDTH="20"></TD>
	</TR>
	<TR>	
		<TD COLSPAN=3>
			<CENTER>
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
