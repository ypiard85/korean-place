function NavMobileToggle(){
    var toggle = false;

    var navMobile = document.querySelector('.nav_mobile')
    var burger = document.querySelector('.burger')
    var close = document.querySelector('.close')

    burger.addEventListener('click', () => {
        toggle = true
        console.log(toggle)
    })

    close.addEventListener('click', () => {
        toggle = false
    })

    if(toggle){
        navMobile.style.display = 'block'
    }else{
        navMobile.style.display = 'none'
    }
}

NavMobileToggle()