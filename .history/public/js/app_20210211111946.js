function NavMobileToggle(){

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('#burger')
    var close = document.querySelector('#close')

    burger.addEventListener('click', function(){
        navMobile.classList.add(' open_nav ')
    })

    close.addEventListener('click', function(){
        navMobile.classList.add('close_nav ')
    })

}

NavMobileToggle()