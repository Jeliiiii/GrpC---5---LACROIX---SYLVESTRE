$(document).ready(function() {
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.modal').modal();
    $('select').formSelect();
});
$('.parallax').parallax();

function loadVideo1() {
    var videoEl = document.getElementsByTagName('video')[0];
    var sourceEl = videoEl.getElementsByTagName('source')[0];
    sourceEl.src = "../video/chad-dr-comp.mp4";
    videoEl.load();
}

window.addEventListener("keydown", checkKeyPress, false);
var keys = ''; // creation de la chaine de caracteres
function checkKeyPress(key) {
    keys += event.key; // ajout des nouvelles touches
    keys = keys.substr(-7); //rafraichissement de la mémoire
    if (keys.substr(-7) === 'antoine') {
        alert('Un giga chad apparait');
        $( ".video-chad" ).show();
        $(".cards").css("margin-top","0px");
    } else if (keys.substr(-4) === 'chad') {
        alert('mode chad activé');
        document.getElementById("title-h2").innerHTML = "L'antre du chad";
        document.getElementById('image-1').src = "img/script/gigachad1.jpg";  
        document.getElementById('image-2').src = "img/script/gigachad2.jpg";  
        document.getElementById('image-3').src = "img/script/dr-chad2.jpg";  
        document.getElementById('image-4').src = "img/script/gigachad4.jpg";  
        document.getElementById('image-5').src = "img/script/dr-chad3.jpg";  
        document.getElementById('explaining-text').innerHTML = "Quelques photos du giga chad";
    }
}
    