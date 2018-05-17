function openFunction() {
    document.getElementById('navsmall').style.display='block';
}

function closeFunction() {
	document.getElementById('navsmall').style.display='none';
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