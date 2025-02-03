<?php
// Include header and gallery menu
include("header.html");
?>

<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR BGCOLOR="#CCCC99">
		<TD COLSPAN=3>
			<CENTER>
			<IMG SRC="images/frontpage.jpg" WIDTH=754 HEIGHT=350 ALT="Welcome!"><BR>
			<A HREF="gallery.php">
<?php
echo "<IMG SRC=\"$language/images/buttons_01.jpg\" ALT=\"Gallery\" BORDER=\"0\"></A>\n";
?>
			<IMG SRC="images/buttons_02.jpg" ALT="*" BORDER="0">
			<A HREF="mailto:myns@skynet.be?Subject=[WEBSITE]%20Request%20for%20more%20information">
<?php
echo "<IMG SRC=\"$language/images/buttons_03.jpg\" ALT=\"Contact\" BORDER=\"0\"></A>\n";
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
