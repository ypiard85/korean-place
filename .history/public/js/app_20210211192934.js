function NavMobileToggle(){

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('#burger')
    var close = document.querySelector('#close')

    burger.addEventListener('click', function(){
        navMobile.classList.replace('close_nav', 'open_nav')
    })

    close.addEventListener('click', function(){
        navMobile.classList.replace('open_nav', 'close_nav')
    })

}

function slide(){
    const slider = document.querySelector('.item');
    let isDown = fasle;
    let startx;
    let scrollLeft;

    slider.addEventListener('mousedown', () => {

    })

    slider.addEventListener('mouseleave', () => {

    })

    slider.addEventListener('mouseup', () => {

    })

    slider.addEventListener('mousemove', () => {

    })

}

NavMobileToggle()
