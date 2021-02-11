function NavMobileToggle(){

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('#burger')
    var close = document.querySelector('#close')

    burger.addEventListener('click', function(){
        navMobile.className -= 'open_nav'
    })

    close.addEventListener('click', function(){
        navMobile.className -= 'close_nav'
    })

}

NavMobileToggle()