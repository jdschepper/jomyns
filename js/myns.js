function getJomynsLangCookie() {
    const name = "jomyns_lang=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const cookieArray = decodedCookie.split(';');
    for(let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i].trim();
        if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return null;
}

function setJomynsLangCookie(lang) {
    document.cookie = "jomyns_lang=" + lang + ";path=/";
}

function createHeader() {
    const header = document.createElement('center');
    var language = getJomynsLangCookie();
    if (language === null) {
        language = "en";
    }
    header.innerHTML = `
		<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
			<TR>
				<TD COLSPAN=3>
					<img src=\"images/top.jpg\" border=\"0\">
				</td>
			</tr>
			<TR>
				<TD COLSPAN=3>
					<a href="virtueel.html"><img src="images/virtueel.gif" border="0"></a>
				</td>
			</tr>
			<TR>
				<TD COLSPAN=3>
					<IMG SRC="images/website_01.gif" WIDTH=754 HEIGHT=89 ALT="[Jo Myns]"></TD>
			</TR>
			<TR>
				<TD>
					<IMG SRC="images/website_02.gif" WIDTH=556 HEIGHT=22 ALT="--------"></TD>
				<TD>
					<A HREF="gallery.html">
						<IMG SRC=\"images/website_03_`+language+`.gif\" WIDTH=\"103\" HEIGHT=\"22\" ALT=\"Gallery\" BORDER=\"0\"></A></TD>
				<TD>
					<A HREF="mailto:myns@skynet.be?Subject=[WEBSITE]%20Vraag%20voor%20meer%20informatie">
						<IMG SRC=\"images/website_04_`+language+`.gif\" WIDTH=\"95\" HEIGHT=\"22\" ALT=\"Contact\" BORDER=\"0\"></A></TD>
			</TR>
		</TABLE>`;
    document.body.insertBefore(header, document.body.firstChild);
}

function createGalleryHeader() {
    const header = document.createElement('center');
    var language = getJomynsLangCookie();
    if (language === null) {
        language = "en";
    }
    header.innerHTML = `
		<TABLE WIDTH=754 BORDER=0 CELLPADDING=0 CELLSPACING=0>
			<TR>
				<TD>
				<IMG SRC="images/gallery_01_`+language+`.jpg" id="large" WIDTH="172" HEIGHT="84" ALT="Large Statues" BORDER="0">
				</TD>
				<TD>
					<A HREF="ballet.html">
					<IMG SRC="images/gallery_02.jpg" WIDTH=25 HEIGHT=84 ALT="1" BORDER="0"></A></TD>
				<TD>
					<A HREF="salto.html">
					<IMG SRC="images/gallery_03.jpg" WIDTH=26 HEIGHT=84 ALT="2" BORDER="0"></A></TD>
				<TD>
					<A HREF="touwtrek.html">
					<IMG SRC="images/gallery_04.jpg" WIDTH=26 HEIGHT=84 ALT="3" BORDER="0"></A></TD>
				<TD>
					<A HREF="handstand.html">
					<IMG SRC="images/gallery_05.jpg" WIDTH=27 HEIGHT=84 ALT="4" BORDER="0"></A></TD>
				<TD>
					<A HREF="denker.html">
					<IMG SRC="images/gallery_06.jpg" WIDTH=27 HEIGHT=84 ALT="5" BORDER="0"></A></TD>
				<TD>
					<A HREF="wandel.html">
					<IMG SRC="images/gallery_07.jpg" WIDTH=29 HEIGHT=84 ALT="6" BORDER="0"></A></TD>
				<TD>
					<A HREF="strand.html">
					<IMG SRC="images/gallery_08.jpg" WIDTH=24 HEIGHT=84 ALT="7" BORDER="0"></A></TD>
				<TD>
					<IMG SRC="images/gallery_09_`+language+`.jpg" id="small" WIDTH="219" HEIGHT="84" ALT="Small Statues" BORDER="0"></TD>
				<TD>
					<A HREF="klein1.html">
					<IMG SRC="images/gallery_10.jpg" WIDTH=24 HEIGHT=84 ALT="1" BORDER="0"></A></TD>
				<TD>
					<A HREF="klein2.html">
					<IMG SRC="images/gallery_11.jpg" WIDTH=25 HEIGHT=84 ALT="2" BORDER="0"></A></TD>
				<TD>
					<A HREF="klein3.html">
					<IMG SRC="images/gallery_12.jpg" WIDTH=26 HEIGHT=84 ALT="3" BORDER="0"></A></TD>
				<TD>
					<A HREF="klein4.html">
					<IMG SRC="images/gallery_13.jpg" WIDTH=28 HEIGHT=84 ALT="4" BORDER="0"></A></TD>
				<TD>
					<A HREF="klein5.html">
					<IMG SRC="images/gallery_14.jpg" WIDTH=29 HEIGHT=84 ALT="5" BORDER="0"></A></TD>
				<TD>
					<A HREF="klein6.html">
					<IMG SRC="images/gallery_15.jpg" WIDTH=25 HEIGHT=84 ALT="6" BORDER="0"></A></TD>
				<TD>
					<IMG SRC="images/gallery_16.jpg" WIDTH=22 HEIGHT=84 ALT="7" BORDER="0"></TD>
			</TR>
		</TABLE>`;
    document.body.insertBefore(header, document.body.firstChild);
	createHeader();
}

// Generic code
var language = getJomynsLangCookie();
if (language === null) {
	language = "en";
}

