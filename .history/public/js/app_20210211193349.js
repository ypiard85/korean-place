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

function Slide(){
    const slider = document.querySelector('.meteo');
    let isDown = fasle;
    let startx;
    let scrollLeft;

    slider.addEventListener('mousedown', () => {
        isDown = true;
    })

    slider.addEventListener('mouseleave', () => {
        isDown = false
    })

    slider.addEventListener('mouseup', () => {
        isDown = false
    })

    slider.addEventListener('mousemove', () => {
        console.log(isDown)
    })

}

NavMobileToggle()
slide()