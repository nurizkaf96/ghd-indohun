$(document).ready(function(){
    $("button").focus(function(){
        $("#contentExecutive").css("display", "block");
    });
});

function accordionfunc(){
$('#contentExecutive').toggleClass('w3-hide w3-show').focus();
}