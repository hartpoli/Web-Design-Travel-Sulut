const timeEl = document.getElementById('time'); 
const dateEl = document.getElementById('date');
const timezone = document.getElementById('time-zone');

const API_KEY ='49cc8c821cd2aff9af04c9f98c36eb74';

setInterval(() => { 
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
