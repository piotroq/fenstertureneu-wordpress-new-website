function WHCreateCookie(name, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    var expires = "; expires=" + date.toGMTString();
	document.cookie = name+"="+value+expires+"; path=/";
}
function WHReadCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

window.onload = WHCheckCookies;

function WHCheckCookies() {
    if(WHReadCookie('cookies_accepted') != 'T') {
        var message_container = document.createElement('div');
        message_container.id = 'cookies-message-container';
        var html_code = '<div id="cookies-message"><div class="container clearfix"><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Die Internetseite benutz die Cookies - Dateien fürdie Erbringung von Dienstleistungen und entsprechend <a href="http://fenster-türen24.eu/impressum" target="_blank" class="link">Politik der Cookies - Dateien</a>. Sie können die Bedingungen für die Aufbewahrung der Cookies - Dateien oder für den Zutritt zu diesen in Ihrem Browser definieren.<a href="javascript:WHCloseCookiesWindow();" class="accept-cookies-checkbox" name="accept-cookie">Ich stimme zu</a></div></div></div></div>';
        message_container.innerHTML = html_code;
        document.body.appendChild(message_container);
    }
}

function WHCloseCookiesWindow() {
    WHCreateCookie('cookies_accepted', 'T', 365);
    document.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));
}