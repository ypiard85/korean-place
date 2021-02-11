function NavToogle(){
    let toggle;

    const close = document.querySelector('.close');
    const burger = document.querySelector('.burger');
    const nav_mobile = document.querySelector('.nav_mobile');

    nav_mobile.style.display = 'none'

    burger.addEventListener('click', function(){
        toggle = true
    })

    close.addEventListener('click', function(){
        toggle = false
    })

    if(toggle){
        nav_mobile.style.display = 'block'
    }else{
        nav_mobile.style.display = 'none'
    }
}


NavToogle()