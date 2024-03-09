function loadXMLDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      const xmlDoc = xhttp.responseXML;
      const cd = xmlDoc.getElementsByTagName("CD");
      myFunction(cd)
    }
    xhttp.open("GET", "cd_catalog.xml");
    xhttp.send();
  }
  
  function myFunction(cd) {
    let table="<tr><th>Artist</th><th>Title</th></tr>";
    for (let i = 0; i < cd.length; i++) { 
      table += "<tr><td>" +
      cd[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
      "</td><td>" +
      cd[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
      "</td></tr>";
    }
    document.getElementById("demo").innerHTML = table;
  }

//   Display the First CD in an HTML div Element

const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
  const xmlDoc = xhttp.responseXML; 
  const cd = xmlDoc.getElementsByTagName("CD");
  myFunction1(cd, 0);
}
xhttp.open("GET", "cd_catalog.xml");
xhttp.send();

function myFunction1(cd, i) {
  document.getElementById("showCD").innerHTML =
  "Artist: " +
  cd[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
  "<br>Title: " +
  cd[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
  "<br>Year: " + 
  cd[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue;
}

// Navigate Between the CDs
let i = 0;
let len;
let cd;

const xhttp1 = new XMLHttpRequest();
xhttp1.onload = function() {
  const xmlDoc = xhttp1.responseXML;
  cd = xmlDoc.getElementsByTagName("CD");
  len = cd.length;
  displayCD(i);
}
xhttp1.open("GET", "cd_catalog.xml");
xhttp1.send();

function displayCD(i) {
    document.getElementById("showCD1").innerHTML =
    "Artist: " +
    cd[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "<br>Title: " +
    cd[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>Country: " +
    cd[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "<br>Company: " +
    cd[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue +
    "<br>Year: " + 
    cd[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue;
  }
  
  function next() {
    if (i < len-1) {
      i++;
      displayCD(i);
    }
  }
  
  function previous() {
    if (i > 0) {
      i--;
      displayCD(i);
    }
  }

//   Show Album Information When Clicking On a CD

const xhttp2 = new XMLHttpRequest();
let cd1;
xhttp2.onload = function() {
 const xmlDoc = xhttp2.responseXML; 
 cd1 = xmlDoc.getElementsByTagName("CD");
 loadCD();
}
xhttp2.open("GET", "cd_catalog.xml");
xhttp2.send();

function loadCD() {
    let table="<tr><th>Artist</th><th>Title</th></tr>";
    for (let i = 0; i < cd1.length; i++) { 
      table += "<tr onclick='displayCD1(" + i + ")'><td>";
      table += cd1[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue;
      table += "</td><td>";
      table += cd1[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
      table += "</td></tr>";
    }
    document.getElementById("demo2").innerHTML = table;
  }
  
  function displayCD1(i) {
    document.getElementById("showCD2").innerHTML =
    "Artist: " +
    cd1[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "<br>Title: " +
    cd1[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "<br>Year: " + 
    cd1[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue;
  }