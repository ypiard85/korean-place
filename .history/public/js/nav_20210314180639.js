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
    var pseudoMobile = document.querySelector('.pseudo_mobile')
    var loginOption = document.querySelector('.login_option')
    var login_option_mobile = document.querySelector('.login_option_mobile')

    pseudo.addEventListener('click', () => {
       toggle = !toggle;

        if(toggle){
            loginOption.classList.replace('close_nav', 'open_nav')
        }else{
            loginOption.classList.replace('open_nav', 'close_nav')
        }

        document.addEventListener('click', () => {
            if(toggle){
                toggle = false
            }else{
                return;
            }
         })
    })

    pseudoMobile.addEventListener('click', () => {
       toggle = !toggle;

        if(toggle){
            login_option_mobile.classList.replace('close_nav', 'open_nav')
        }else{
            login_option_mobile.classList.replace('open_nav', 'close_nav')
        }

        document.addEventListener('click', () => {
            if(toggle){
                toggle = false
            }else{
                return;
            }
         })
    })
}

PseudoNav()
