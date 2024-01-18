let menu=document.querySelector('#menu-bars');
let navbar=document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('actve'); 
}
mwindow.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('actve'); 
}

document.querySelector('#earch-icon').onclick = ()=> {
document.querySelector('#search-form').classList.toggle('active');
}