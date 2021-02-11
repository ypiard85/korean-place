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



function  WeatherApi(){
   fetch(`http://api.openweathermap.org/data/2.5/weather?q=Seoul&units=metric&appid=2b1ec7a5b325cfbf7c1bc18b936df3f3`).then( res => res.json()).then(Seoulcity)
   fetch(`http://api.openweathermap.org/data/2.5/weather?q=Busan&units=metric&appid=2b1ec7a5b325cfbf7c1bc18b936df3f3`).then( res => res.json()).then(Seoulcity)
}

function Seoulcity(weather){
    let meteo = document.querySelector('#meteo')
    let item = document.createElement('div')
    let p1 = document.createElement('p')
    let p2 = document.createElement('p')

    item.classList = 'item'
    p1.classList = 'city'
    p2.classList = 'temp'

    p1.innerText = weather.name

    meteo.appendChild(item)
    item.appendChild(p1)
    item.appendChild(p2)


}


NavMobileToggle()
Slide()
WeatherApi()
Seoulcity()