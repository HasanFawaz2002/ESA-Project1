/*weather api starts here*/


const apiKey = "2d27ba7852d8a8a569a63feba802ac72";
const apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&lat={lat}&lon={lon}&appid=" + apiKey;


const searchBox=document.querySelector(".search-weather input");
const searchBtn=document.querySelector(".search-weather button");


async function checkWeather(city) {
  const apiUrl2 = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;

  const response = await fetch(apiUrl2);
  const data = await response.json();
  const latitude = data.coord.lat;
  const longitude = data.coord.lon;
  const weatherUrl = apiUrl.replace("{lat}", latitude).replace("{lon}", longitude);

  const weatherResponse = await fetch(weatherUrl);
  const weatherData = await weatherResponse.json();
  console.log(weatherData);
  document.querySelector(".city").innerHTML = weatherData.name;
  document.querySelector(".temp").innerHTML = weatherData.main.temp + "°C";
  document.querySelector(".humidity").innerHTML = weatherData.main.humidity + "%";
  document.querySelector(".wind").innerHTML = weatherData.wind.speed + " KM/H";
}
searchBtn.addEventListener("click", ()=>{
    checkWeather(searchBox.value);
})





//weather api ends here



//login btn

document.getElementById("loginbtn").addEventListener("click", function() {
    localStorage.setItem("shouldAnimate", "true");
  });