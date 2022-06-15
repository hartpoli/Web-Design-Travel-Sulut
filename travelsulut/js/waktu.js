const timeEl = document.getElementById('time'); 
const dateEl = document.getElementById('date');
const currentWeatherItemsEl = document.getElementById('current-weather-items');
const timezone = document.getElementById('time-zone');
const countryEl = document.getElementById('country');

const API_KEY ='49cc8c821cd2aff9af04c9f98c36eb74';

setInterval(() => { // 
    const time = new Date();
    const month = time.getMonth();
    const date = time.getDate();
    const day = time.getDay();
    const hour = time.getHours();
    const hoursIn12HrFormat = hour >= 13 ? hour %12: hour;
    const minutes = time.getMinutes();
    const ampm = hour >=12 ? 'PM' : 'AM'; // 

    timeEl.innerHTML = (hoursIn12HrFormat < 10? '0'+hoursIn12HrFormat : hoursIn12HrFormat) + ':' + (minutes < 10? '0'+minutes: minutes)+ ' ' + `<span id="am-pm">${ampm}</span>` ;  // kita buatkan variabel timeEl untuk menampilkan jam dan menampilkan waktu pada format AM dan PM

    dateEl.innerHTML = day + ', ' + date+ ' ' + month; // kita buatkan variabel dateEl untuk menampilkan tanggal dan bulan

}, 1000);

getWeatherData()
function getWeatherData () { // kita buatkan function getWeatherData untuk mengambil data dari API
    navigator.geolocation.getCurrentPosition((success) => { // kita buatkan navigator.geolocation.getCurrentPosition untuk mengambil data dari API
        
        let {latitude, longitude } = success.coords; // kita buatkan variabel latitude dan longitude untuk mengambil data latitude dan longitude dari navigator.geolocation.getCurrentPosition

        fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${latitude}&lon=${longitude}&exclude=hourly,minutely&units=metric&appid=${API_KEY}`).then(res => res.json()).then(data => { // kita buatkan fetch untuk mengambil data dari API

        console.log(data); // kita buatkan console.log untuk menampilkan data dari API
        showWeatherData(data); // kita buatkan showWeatherData untuk menampilkan data dari API
        })

    })
}

function showWeatherData (data){ // kita buatkan function showWeatherData untuk menampilkan data dari API
    let {humidity, pressure, sunrise, sunset, wind_speed} = data.current; // kita buatkan variabel humidity, pressure, sunrise, sunset, wind_speed untuk mengambil data dari API

    timezone.innerHTML = data.timezone; // kita buatkan variabel timezone untuk menampilkan data timezone dari API
    countryEl.innerHTML = data.lat + 'N ' + data.lon+'E'; // kita buatkan variabel countryEl untuk menampilkan data latitude dan longitude dari API

    currentWeatherItemsEl.innerHTML = // kita buatkan variabel currentWeatherItemsEl untuk menampilkan data dari API
    `<div class="weather-item">
        <div>humidity</div>  
        <div>${humidity}%</div>
    </div>
    <div class="weather-item">
        <div>pressure</div>
        <div>${pressure}</div>
    </div>
    <div class="weather-item">
        <div>Wind Speed</div>
        <div>${wind_speed}</div>
    </div>
    <div class="weather-item">
        <div>sunrise</div>
        <div>${window.moment(sunrise * 1000).format('HH:mm a')}</div>
    </div>
    <div class="weather-item">
        <div>sunset</div>
        <div>${window.moment(sunset*1000).format('HH:mm a')}</div>
    </div>



    `;
}
