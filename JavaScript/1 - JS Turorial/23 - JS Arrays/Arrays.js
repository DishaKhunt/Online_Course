let cars1 = ["Thar", "BMW", "Verna"];
let cars2 = new Array("Thar","BMW","Verna");
let cars = ["Thar", "BMW", "Verna"];
cars[0] = "Audi";

document.getElementById("demo1").innerHTML = cars1+"<br>"+
                                            cars2+"<br>"+
                                            "cars1[0] : "+cars1[0]+"<br>"+
                                            "Changing Array : "+cars;

// convert array to string

let fruit = ["Banana","Apple","Orange"];
document.getElementById("demo2").innerHTML = "convert array to string : "+fruit.toString();

// Array methdos and properties
let arr_length = fruit.length;
let first_element = fruit[0];
let last_arr_element = fruit[fruit.length-1];
document.getElementById("demo3").innerHTML = fruit+"<br>"+
                                            "Fruit Length : "+arr_length+"<br>"+
                                            "Accessing the First Array Element : "+first_element+"<br>"+
                                            "Accessing the Last Array Element : "+last_arr_element;

// looping in Array
let arr = "<ul>";
for(let i=0 ; i < arr_length; i++){
    arr += "<li>"+fruit[i]+"</li>";
}
arr += "</ul>";
document.getElementById("demo4").innerHTML = arr;

//  forEach() Method
let arr1 = "<ul>";
fruit.forEach(myFunction);
arr1 += "</ul>";
document.getElementById("demo5").innerHTML = arr1;

function myFunction(value){
   arr1 += "<li>"+value+"</li>";
}

// adding the array element
let add_element = fruit.push("Lemon");
// fruit[fruit.length-1] = "Watermelan"
document.getElementById("demo6").innerHTML = "Add the element in Array : "+fruit;


// reate undefined "holes" in an array:
let fruits = ["Banana", "Orange", "Apple"];
fruits[6] = "Lemon";

let fLen = fruits.length;
let text = "";
for (i = 0; i < fLen; i++) {
  text += fruits[i] + "<br>";
}

document.getElementById("demo7").innerHTML = text;


// Associative Arrays
let person = [];
person[0] = "Disha";
person[1] = "Khunt";
person[2] = 20;

let person1 = [];
person1["FirstName"] = "Disha";
person1["LastName"] = "Khunt";
person1["Age"] = 20;

document.getElementById("demo8").innerHTML = "person[0] : "+person[0]+"<br>"+
                                            "person length : "+person.length+"<br><br>"+
                                            "person1[0] : "+person1[0]+"<br>"+
                                            "person2 length : "+person1.length;


// new Array
// avoid the creat new array.
let array1 = new Array(5,2,3);
let array2 = new Array(5,2);
let array3 = new Array(5);
let array4 = [50,20,30,40];
let array5 = [50,20];
let array6= [50];

document.getElementById("demo9").innerHTML = "new Array(5,2,3) = "+array1+"<br>"+
                                            "new Array(5,2) = "+array2+"<br>"+
                                            "new Array(5) = "+array3+"<br>"+ //undefined
                                            "[50,20,30,40] = "+array4+"<br>"+
                                            "[50,20] = "+array5+"<br>"+
                                            "[50] = "+array6;

                                           
// How to Recognize an Array
let type = typeof fruit;
let sol1 = Array.isArray(fruit);
let sol2 = fruit instanceof Array;
document.getElementById("demo10").innerHTML = "type of Array : "+type+"<br>"+
                                            "Array.isArray(fruit) :  "+sol1+"<br>"+
                                            "fruit instanceof Array : "+sol2;


