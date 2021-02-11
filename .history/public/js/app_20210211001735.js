var toggle = false
   const close = document.querySelector('.close');
    const burger = document.querySelector('.burger');
    const nav_mobile = document.querySelector('.nav_mobile');

    nav_mobile.style.display = 'none'

    burger.addEventListener('click', function(){
        toggle = true;
        if(toggle){

            nav_mobile.style.display = 'block'
        }
    })

    close.addEventListener('click', function(){
        nav_mobile.style.display = 'none'
    })
