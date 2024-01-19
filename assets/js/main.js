let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
let searchIcon = document.querySelector('#search-icon');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

searchIcon.onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
};
document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
};