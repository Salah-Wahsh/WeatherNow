// // 9cadc40ff7552954e334bc0e488db231
// let clientID= "UbMVB-D_RFTCUCFpa8sEaHL2S3fAl8eCgUM3O3lk9gg";


console.log("hello")
let weather = {
  "apiKey": "9cadc40ff7552954e334bc0e488db231",
  fetchweather: function(city){
fetch("https://api.openweathermap.org/data/2.5/weather?q="+city+"&appid="+this.apiKey+"&units=metric"  ).then((response) => response.json())
.then((data) => this.displayWeather(data) );
  },
  displayWeather: function(data){
const { name } = data;
const {icon, description } = data.weather[0];
const {temp , humidity} = data.main;
const {speed}= data.wind;
console.log(name,icon,description,humidity,speed)
document.querySelector(".city").innerText = "Weather in "+name;
document.querySelector(".icon").src = "http://openweathermap.org/img/wn/"+icon+".png"
document.querySelector(".description").innerText= description;
document.querySelector(".temp").innerText= temp + " °C"
document.querySelector(".humed").innerText = "humidity: " +humidity+  "%";
document.querySelector(".wind").innerText = "Wind speed: " + speed  + "km/h";

document.querySelector(".weather").classList.remove("loading");
  },
  search: function(){
    this.fetchweather(document.querySelector(".search-bar").value);
  }
};
document.querySelector(".search button").addEventListener("click", function(){

weather.search();
console.log(weather.search());

});
document.querySelector(".search-bar").addEventListener("keyup", function(){
if (event.key == "Enter"){
  weather.search();
}  
})
weather.fetchweather("Cairo");
