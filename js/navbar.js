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