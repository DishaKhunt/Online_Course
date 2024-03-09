// Array Const
const cars = ["Thar", "BMW", "Verna"]; //cars[0] is "Thar"
document.getElementById("demo1").innerHTML = cars;

// const not reassign 
try{
    const cars = ["Thar", "BMW", "Verna", "Audi"];
    cars = ["Thar", "BMW", "Verna", "Audi"];
}
catch (err){
    document.getElementById("demo2").innerHTML = err;
}

// Elements Can be Reassigned
cars[0] = "Toyota";

cars.push("Audi");
document.getElementById("demo3").innerHTML = cars; //cars[0] "Toyota"

// Const Block Scope
{
    const cars = [ "BMW", "Thar"]; //cars[0] is "BMW"
}
document.getElementById("demo4").innerHTML = cars[0]; //cars[0] "Toyota"

// Declaring an Array Using var
var car = ["Saab", "Volvo", "BMW"];
// cars[0] is "Saab"
{  
  var car = ["Toyota", "Volvo", "BMW"]; 
  // cars[0] is "Toyota"
}
// cars[0] is "Toyota"
document.getElementById("demo5").innerHTML = car[0];

