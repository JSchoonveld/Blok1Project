var hamburger = document.getElementsByClassName('hamburger')[0];
var menu = document.getElementsByClassName('dropdown-content')[0];
const nav = document.getElementsByClassName('nav')[0];

console.log(hamburger, menu);
hamburger.addEventListener('click', function (){
    nav.classList.toggle('active1');
    hamburger.classList.toggle('active2');

    hamburger.style.transitionDuration = '0.2s';
    nav.style.transitionDuration = '0.2s';
    if(hamburger.innerHTML === '☰'){
        hamburger.innerHTML = 'X';
    }
    else {
        hamburger.innerHTML = '☰';
    }

})
