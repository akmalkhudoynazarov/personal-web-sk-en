var dropdown = document.querySelector('.dropdown');
var language = document.getElementById('language');
var navmenu = document.querySelector('.hamburger');

navmenu.addEventListener("click", function(){
    dropdown.classList.remove('show')
})

language.addEventListener("click", function(){
    dropdown.classList.toggle('show');
})