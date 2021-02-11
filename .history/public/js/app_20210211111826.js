function NavMobileToggle(){

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('#burger')
    var close = document.querySelector('#close')

    burger.addEventListener('click', function(){
        navMobile.classList += 'open_nav'
    })

    close.addEventListener('click', function(){
        navMobile.classList += 'close_nav'
    })

}

NavMobileToggle()