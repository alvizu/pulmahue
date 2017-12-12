
var header = document.getElementById('header')
var buttonGreen = document.getElementById('button-color');
var defaultBkgrd = document.getElementById('default-bkgrd');
var christmasBkgrd = document.getElementById('christmas-bkgrd');
buttonGreen.addEventListener('click', function () {
    header.style.background = ''
    header.style.backgroundColor = '#8d98b4'
});

defaultBkgrd.addEventListener('click', function () {
    header.style.background = "url('img/bg-fondo.jpg')"
});

christmasBkgrd.addEventListener('click', function () {
    header.style.background = "url('img/background_christmas.jpg')"
});

