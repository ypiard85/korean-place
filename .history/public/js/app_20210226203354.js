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



 function  WeatherApi(){
    let citys = ['Seoul', 'Busan', 'Incheon', 'Jeju', 'Gangwon-do', 'Taegu', 'Daejeon', 'Chuncheon', 'gyeonggi-do']
        citys.forEach(el => {
           fetch(`http://api.openweathermap.org/data/2.5/weather?q=${el}&units=metric&appid=2b1ec7a5b325cfbf7c1bc18b936df3f3`).then( res => res.json()).then(CityItems)
        })

}

function CityItems(weather){

    let meteo = document.querySelector('#meteo')
    let item = document.createElement('div')
    let p1 = document.createElement('p')
    let p2 = document.createElement('p')
    let p3 = document.createElement('p')

    item.classList = 'item'
    p1.classList = 'city'
    p2.classList = 'temp'
    p3.classList = 'vent'


    p1.innerText = weather.name
    p2.innerText = Math.floor(weather.main.temp) + ' °C'


    meteo.appendChild(item)
    item.appendChild(p1)
    item.appendChild(p2)

    switch (weather.weather[0].main) {
        case 'Clear':
            item.style.backgroundImage = `url('../gif/sun.gif')`
            break;
        case 'Clouds':
            item.style.backgroundImage = `url('../gif/clouds.gif')`
            break;
        case 'Rain':
            item.style.backgroundImage = `url('../gif/rain.gif')`
            break;
        case 'Haze':
            item.style.backgroundImage = `url('../gif/haze.gif')`
            break;
        case 'Snow':
            item.style.backgroundImage = `url('../gif/snow.gif')`
            break;
        default:
            break;
    }

}


NavMobileToggle()
Slide()
WeatherApi()


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