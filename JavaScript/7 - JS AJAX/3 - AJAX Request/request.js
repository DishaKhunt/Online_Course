function loadDoc(){
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function(){
        document.getElementById("demo1").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../1 - AJAX Intro/ajax_info.html");
    xhttp.send();
}
