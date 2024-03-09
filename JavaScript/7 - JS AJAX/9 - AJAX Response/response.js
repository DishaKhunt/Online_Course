function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo1").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "../1 - AJAX Intro/ajax_info.html");
    xhttp.send();
  }

//  The responseXML Property

const xhttp =new XMLHttpRequest();
xhttp.onload = function(){
    const xmlDoc = this.responseXML;

    const x = xmlDoc.getElementsByTagName("ARTIST");
    
    let txt = "";

    for(let i = 0; i<x.length ; i++){
        txt = txt + x[i].childNodes[0].nodeValue + "<br>";
    }

    document.getElementById("demo2").innerHTML = txt;

}

xhttp.open("GET", "cd_catalog.xml");
xhttp.send();

// The getAllResponseHeaders() Method

const xhttp1 = new XMLHttpRequest();
xhttp1.onload = function(){
    document.getElementById("demo3").innerHTML = this.getAllResponseHeaders();
}
xhttp1.open("GET", "../1 - AJAX Intro/ajax_info.html");
xhttp1.send();

// The getResponseHeader() Method
const xhttp2 = new XMLHttpRequest();
xhttp2.onload = function(){
    document.getElementById("demo4").innerHTML = this.getResponseHeader("Last-Modified");
}
xhttp2.open("GET", "../1 - AJAX Intro/ajax_info.html");
xhttp2.send();