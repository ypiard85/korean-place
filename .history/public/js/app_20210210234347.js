function NavToogle(){
    let toggle;

    const close = document.querySelector('.close');
    const burger = document.querySelector('.burger');
    const nav_mobile = document.querySelector('.nav_mobile');

    nav_mobile.style.display = 'none'

    burger.addEventListener('click', function(){
        this.toggle = true
    })

    close.addEventListener('click', function(){
        this.toggle = false
    })

    if(toggle){
        nav_mobile.style.display = 'block'
    }else{
        nav_mobile.style.display = 'none'
    }
}


NavToogle()