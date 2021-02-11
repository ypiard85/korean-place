function NavMobileToggle(){
    var toggle = false;

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('.burger')
    var close = document.querySelector('.close')

    burger.addEventListener('click', () => {
        navMobile.style.display = 'block'
    })

    close.addEventListener('click', () => {
        navMobile.style.display = 'none'
    })

}

NavMobileToggle()