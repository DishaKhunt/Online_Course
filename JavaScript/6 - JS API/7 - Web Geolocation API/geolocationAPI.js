const x = document.getElementById("demo1");

function getLocation(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    else{
        x.innerHTML = "Geolocation is not suppored by this broser.";
    }
}

function showPosition(position){
    x.innerHTML = "Latitude : " + position.coords.latitude + "<br>"+
                    "Longitude : "+position.coords.longitude;
}

// Handling Errors and Rejections
function showErrror(error){
    switch(error.code){
        case error.PERMISSION_DENIED : x.innerHTML = "User defined the request for Geolocation."
        break;

        case error.POSITION_UNAVAILABLE : x.innerHTML = "Location information is unavailable."
        break;

        case error.TIMEOUT : x.innerHTML = "The request to get user location timed out."
        break;

        case error.UNKNOWN_ERROR : x.innerHTML = "An unknown error occurred."
        break;

    }
}

// Displaying the Result in a Map
const y = document.getElementById("demo2");

function getLocation1() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition1);
  } else { 
    y.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition1(position) {
    y.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}




