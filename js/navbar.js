function myFunction() {
    var x = document.getElementById("navsmall");
    var y = document.getElementById("logo-utama");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.style.display = "none";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        y.style.display = "block";
    }
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		document.getElementById("navbar").style.top = "0";
	} else {
		document.getElementById("navbar").style.top = "-9.375rem";
		document.getElementById("navbar").style.backgroundColor = "rgba(244,67,54,0.8)";
	}
	prevScrollpos = currentScrollPos;
}