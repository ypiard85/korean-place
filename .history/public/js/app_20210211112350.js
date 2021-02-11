function NavMobileToggle(){

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('#burger')
    var close = document.querySelector('#close')

    burger.addEventListener('click', function(){
        navMobile.classList.replaceep('close_nav', 'open_nav')
    })

    close.addEventListener('click', function(){
        navMobile.classList.replaceep('open_nav', 'close_nav')
    })

}

NavMobileToggle()