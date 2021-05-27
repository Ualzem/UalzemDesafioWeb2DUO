// mudança menu no scroll
var nav = document.getElementById('nav');
var img = document.getElementById('img');
var superinfo = document.getElementById('superinfo');

window.onscroll = function() {
    if (window.pageYOffset > 100) {
        nav.style.background = "#fff";
        nav.style.boxShadow = "0px 3px 4px grey";
        img.style.width = "87px";
        superinfo.style.filter = "grayscale(100)";
    } else {
        nav.style.background = "transparent";
        nav.style.boxShadow = "none";
        img.style.width = "137px";
        superinfo.style.filter = "grayscale(0)";
    }
}