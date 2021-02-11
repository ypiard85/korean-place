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

function Slide(){
    const slider = document.querySelector('.meteo');
    let isDown = false;
    let startx;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        startx = e.pageX - slider.offsetLeft
        scrollLeft = slider.scrollLeft
        console.log(startx)
    })

    slider.addEventListener('mouseleave', () => {
        isDown = false
    })

    slider.addEventListener('mouseup', () => {
        isDown = false

    })

    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft
        console.log({x, startx})
        const walk = (x - startx) * 2
        slider.scrollLeft = scrollLeft - walk
    })

}

async function  WeatherApi(){
    var url = 'api.openweathermap.org/data/2.5/weather?q=seoul&appid=2b1ec7a5b325cfbf7c1bc18b936df3f3'
    const api = await fetch(url).then(res,req => {
        res.json()
    })
    console.log(api)
}

NavMobileToggle()
Slide()
WeatherApi()