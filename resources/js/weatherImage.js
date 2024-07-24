document.addEventListener("DOMContentLoaded", function(){
    var condition = document.getElementById('weather-condition').dataset.condition;
    console.log('Weather condition:', condition);

    var conditionToImage = {
        "Sunny": "images/PNG/256/day_clear.png",
        "Partly cloudy": "images/PNG/256/day_partial_cloud.png",
        "Cloudy": "images/PNG/256/cloudy.png",
        "Overcast": "images/PNG/256/overcast.png",
        "Mist": "images/PNG/256/mist.png",
        "Fog": "images/PNG/256/fog.png",
    };

    var imageURL = conditionToImage[condition] || "images/PNG/256/day_clear.png";
    console.log('Image URL:', imageURL);    

    var weatherIconDiv = document.getElementById('weathericon');
    if(weatherIconDiv){
        var imgElement = document.createElement('img');
        imgElement.src = imageURL;
        imgElement.alt = condition;
        weatherIconDiv.appendChild(imgElement);
    } else {
        console.error('Weather icon div not found');
    }
});