var hamburger = document.getElementsByClassName('hamburger')[0];
var menu = document.getElementsByClassName('dropdown-content')[0];
const nav = document.getElementsByClassName('nav')[0];


hamburger.addEventListener('click', function (){
    nav.classList.toggle('active1');

    hamburger.style.transitionDuration = '0.2s';
    nav.style.transitionDuration = '0.2s';
    if(hamburger.innerHTML === '☰'){
        hamburger.innerHTML = 'X';
    }
    else {
        hamburger.innerHTML = '☰';
    }

})
var logo = document.getElementsByClassName('logoL')[0];
var header = document.getElementsByClassName('header')[0];


if(header){
    header.addEventListener('resize', function (){
        if (window.innerWidth < 815 && window.innerWidth > 400){
            logo.style.visibility = 'hidden';
            header.style.display = 'none';

        }
    })

}
