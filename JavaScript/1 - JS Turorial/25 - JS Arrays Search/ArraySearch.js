const fruits = ["Apple", "Orange", "Apple", "Mango"];
document.getElementById("demo").innerHTML = fruits;


// indexOf()
let position1 = fruits.indexOf("Apple")+1;
let position2 = fruits.indexOf("Mango")+1;
document.getElementById("demo1").innerHTML = "Apple is found in position : " + position1+"<br>"+
                                            "Mango is found in position : " + position2;

// lastIndexOf()
let position3 = fruits.lastIndexOf("Apple")+1;
let position4 = fruits.lastIndexOf("Orange")+1;
document.getElementById("demo2").innerHTML = "Apple is found in position : " + position3+"<br>"+
                                            "Orange is found in position : " + position4;

//  Array includes()
let include1 = fruits.includes("Mango");
let include2 = fruits.includes("Kiwi");
document.getElementById("demo3").innerHTML = " Mango is include in fruits? : "+include1+"<br>"+
                                            " Kiwi is include in fruits? : "+include2;

// Array find()
let numbers = [2, 7, 17, 25, 29];
let first = numbers.find(myFunction);

document.getElementById("demo4").innerHTML = "The first over 18 is : "+first;

function myFunction(value, index, array){
    return value>18;
}

// Array findIndex()
let index = numbers.findIndex(myFunction);
document.getElementById("demo5").innerHTML = " The first index index over 18 : "+index;


// findLast() Method
const temp = [27, 28, 30, 40, 42, 35, 30];
let high = temp.findLast(x => x > 40);

// findLastIndex() Method
let pos = temp.findLastIndex(x => x > 40);

document.getElementById("demo6").innerHTML = "The last temperature over 40 was : " + high+ "<br>"+
                                            "<h4>findLastIndex() Method</h4>"+
                                            "The last temperature over 40 was in position is :  " + pos;