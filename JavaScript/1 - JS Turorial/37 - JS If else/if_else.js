// if Statement

if(new Date().getHours() < 18){
    document.getElementById("demo1").innerHTML = "Good Day!";
}

// if else Statement

let hour = new Date().getHours();
let greeting;

if(hour < 18){
    greeting = "Good Day!!!!";
}
else{
    greeting = "Good Evening!!!!";
}
document.getElementById("demo2").innerHTML = greeting;


// else if Statement

const time = new Date().getHours();
let greeting1;

if (time < 10) {
  greeting1 = "Good morning";
} else if (time < 20) {
  greeting1 = "Good day";
} else {
  greeting1 = "Good evening";
}
document.getElementById("demo3").innerHTML = greeting1;
