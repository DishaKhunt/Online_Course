// Sending Data

// const myObj = { name: "John", age: 31, city: "New York" };
// const myJSON = JSON.stringify(myObj);
// window.location = "demo_json.html?x=" + myJSON;

// JSON From a Server

const btn = document.getElementById("btn");

btn.addEventListener("click", function(){

  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function() {
    const myObj = JSON.parse(this.responseText);
    document.getElementById("demo1").innerHTML = "Name : "+ myObj.name+ "<br> "+"Age : " +myObj.age;
  }
  xmlhttp.open("GET", "demo-json.txt");
  xmlhttp.send();
});



// Array as JSON

const btn1 = document.getElementById("btn1");

btn1.addEventListener("click", function(){

  const xmlhttp1 = new XMLHttpRequest();
  xmlhttp1.onload = function(){
    const myArr = JSON.parse(this.responseText);
    document.getElementById("demo2").innerHTML = myArr;
  }
  xmlhttp1.open("GET", "demo-json-array.txt", true);
  xmlhttp1.send();

});

