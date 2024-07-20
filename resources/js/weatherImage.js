document.addEventListener("DOMContentLoaded", function(){
    var condition = document.getElementById('weather-condition').dataset.condition;
    console.log('Weather condition:', condition);

    var conditionToImage = {
        "Sunny": "images/sunny.png",
        "Partly cloudy": "images/cloudy.png",
    };

    var imageURL = conditionToImage[condition] || "images/thunder.png";
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