const mobile_menu_Close = document.querySelector('.close');
const mobile_menu = document.querySelector('.mobile__menu');
const menubars= document.querySelector('.fa-bars');

function menuClose(){
mobile_menu.classList.remove('active');

}
// close menu event listener
mobile_menu_Close.addEventListener('click',menuClose)
// toggle mobile menu bars
function showMenu (){
    mobile_menu.classList.add('active');
    menubars.style.diplay="none";
}
menubars.addEventListener('click',showMenu);