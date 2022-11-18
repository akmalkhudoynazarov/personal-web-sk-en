const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.nav');

hamburger.addEventListener('click', ()=>{
    menu.classList.toggle('active');
    hamburger.classList.toggle('active');
})
document.querySelectorAll('.nav-link').forEach((n) => n.addEventListener('click', ()=>{
    menu.classList.remove('active');
    hamburger.classList.remove('active');
}))