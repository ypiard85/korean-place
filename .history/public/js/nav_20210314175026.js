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

NavMobileToggle()

var position = 0;
var positionActuel = position

function ScrollChangeClass(){
    var navClass = 'fixed_nav'

    var nav = document.querySelector('nav')


    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        nav.classList.add(navClass)
    }else{
        nav.classList.remove(navClass)
    }
}

window.onscroll = function() {ScrollChangeClass()};

function PseudoNav(){
    var toggle = false
    var pseudo = document.querySelector('.pseudo')
    var loginOption = document.querySelector('.login_option')

    pseudo.addEventListener('click', () => {
       toggle = !toggle;

    })

    if(toggle){
        loginOption.classList.replace('close_nav', 'open_nav')
    }else{
        loginOption.classList.replace('open_nav', 'close_nav')
    }
}
PseudoNav()
