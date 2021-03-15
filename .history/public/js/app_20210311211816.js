document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
        type   : 'loop'
        perPage: 3,
        focus  : 'center',
    } ).mount();
} );

 function  WeatherApi(){
    let citys = ['Seoul', 'Busan', 'Incheon', 'Jeju',
    'Gangwon-do', 'Taegu', 'Daejeon', 'Chuncheon', 'gyeonggi-do', 'Gwangju',
    'suwon', 'Changwon'
]
        citys.forEach(el => {
           fetch(`http://api.openweathermap.org/data/2.5/weather?q=${el}&units=metric&appid=2b1ec7a5b325cfbf7c1bc18b936df3f3`).then( res => res.json()).then(CityItems)
        })

}

function CityItems(weather){

    let meteo = document.querySelector('.splide__list')
    let item = document.createElement('li')
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

    item.classList.add('splide__slide')

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
        case 'Fog':
            item.style.backgroundImage = `url('../gif/haze.gif')`
            break;
        case 'Haze':
            item.style.backgroundImage = `url('../gif/haze.gif')`
            break;
        case 'Mist':
            item.style.backgroundImage = `url('../gif/haze.gif')`
            break;
        case 'Snow':
            item.style.backgroundImage = `url('../gif/snow.gif')`
            break;
        default:
            break;
    }
}

WeatherApi()
