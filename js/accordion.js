function executiveFunc() {
    var x = document.getElementById("contentExecutive");
    var y = document.getElementById("contentStudent");
    var z = document.getElementById("contentIntermediate");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.className = y.className.replace(" w3-show", "");
        z.className = z.className.replace(" w3-show", "");
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function studentFunc() {
    var x = document.getElementById("contentStudent");
    var y = document.getElementById("contentExecutive");
    var z = document.getElementById("contentIntermediate");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.className = y.className.replace(" w3-show", "");
        z.className = z.className.replace(" w3-show", "");
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function interFunc() {
    var x = document.getElementById("contentIntermediate");
    var y = document.getElementById("contentStudent");
    var z = document.getElementById("contentExecutive");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.className = y.className.replace(" w3-show", "");
        z.className = z.className.replace(" w3-show", "");
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}