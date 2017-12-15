
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

var formRegister = document.getElementById("formRegister")
var elementos = formRegister.elements;
var name = document.getElementById('name')
var pwd = document.getElementById('password')
var pwdC = document.getElementById('password-c')

formRegister.addEventListener('submit', function(e) {
    if (pwd.value !== pwdC.value) {
        alert('chequea el pass')
        e.preventDefault()
    }
})