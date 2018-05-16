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
// Get the modal
// var modal = document.getElementById('navsmall');

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

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