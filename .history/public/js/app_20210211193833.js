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
    let isDown = false;
    let startx;
    let scrollLeft;

    slider.addEventListener('mousedown', () => {
        isDown = true;
        slider.classList.add('active')
    })

    slider.addEventListener('mouseleave', () => {
        isDown = false
        slider.classList.remove('active')
    })

    slider.addEventListener('mouseup', () => {
        isDown = false
        slider.classList.remove('active')
    })

    slider.addEventListener('mousemove', () => {
        if(!isDown) return;
        console.log(isDown)
    })

}

NavMobileToggle()
Slide()