
const fruits = ["Apple","Banana","Orange","Mango"];

document.getElementById("demo").innerHTML = "The array is : "+fruits;

// sorting array
let arr_sort = fruits.sort();

// reverce array
let arr_reverse = fruits.reverse();

// sorted array
let arr_sorted = fruits.toSorted();

const months = ["Jan","Feb","Mar","Apr"]
// to reversed array
let arr_reversed = months.toReversed();


document.getElementById("demo1").innerHTML = "The sorting array is : "+arr_sort+"<br>"+
                                            "<h4>Reverse array : reverse()</h4>"+
                                            "The reverse Array is : "+arr_reverse+"<br>"+
                                            "<h4> Array toSorted() Method</h4>"+
                                            "The Sorted  array  is : "+arr_sorted+
                                            "<h4>Array toReversed() Method</h4>"+
                                            "The Reversed array is : "+arr_reversed;

// Numeric Sort
const numbers = [40, 100, 1, 5, 30 , 15];
const points = [20, 10, 90, 16, 5 ,45];
// sort array
let ascending = numbers.sort(function(a,b){return a - b});
let descending = points.sort(function(a,b){return b - a});
document.getElementById("demo2").innerHTML = "40, 100, 1, 5, 30 , 15 => "+ascending +"<br>"+
                                              "20, 50, 90, 16, 5 ,45 => "+  descending;

// function in sort
function myFunction1(){
    numbers.sort();
    document.getElementById("demo3").innerHTML = numbers;
}
function myFunction2(){
    numbers.sort(function(a, b){ 
        return a - b 
    });
    document.getElementById("demo3").innerHTML = numbers;
}

// Sorting an Array in Random Order
function myFunction3(){
    numbers.sort(function(){
        return 0.5 - Math.random()
    });
    document.getElementById("demo4").innerHTML = numbers;
}

// The Fisher Yates Method

function myFunction4(){
    for(let i = numbers.length - 1; i>0 ; i--){
        let j = Math.floor(Math.random() * (i+1));
        let k = numbers[i];
        numbers[i] = numbers[j];
        numbers[j] = k;
    }
    document.getElementById("demo5").innerHTML = numbers;
}

// Find Min or Max with sort()
// acsending order
document.getElementById("demo6").innerHTML = "The lowest value is : "+numbers[0]+"<br>"+
                                            "The higher value is : "+numbers[numbers.length-1];

// descending order
document.getElementById("demo7").innerHTML = "The higher value is : "+points[0]+"<br>"+
                                            "The lowest value is : "+points[points.length-1];


// Using Math.min() on an Array
function myArrayMin(arr) {
    return Math.min.apply(null, arr);
}
document.getElementById("demo8").innerHTML = "The lowest number is : "+myArrayMin(numbers);

// Using Math.max() on an Array
function myArrayMax(arr) {
    return Math.max.apply(null, arr);
}
document.getElementById("demo9").innerHTML = "The highest number is : "+myArrayMax(numbers);

// Array Minimum Method
function arrayMin(arr){
    let len = arr.length;
    let min = Infinity;
    while (len--) {
      if (arr[len] < min) {
        min = arr[len];
      }
    }
    return min;   
}
document.getElementById("demo10").innerHTML = "The lowest number is : "+arrayMin(numbers);

// Array Maximum Method
function arrayMax(arr){
    let len = arr.length;
    let max = -Infinity;
    while(len--){
        if(arr[len]>max){
            max = arr[len];
        }
        return max;
    }
}
document.getElementById("demo11").innerHTML = "The highest number is : "+arrayMax(numbers);

// Sorting Object Arrays
const person = [
    {name: "Disha", age : 20},
    {name: "Isha", age : 22},
    {name: "Manshi", age : 21}
];
displayPerson();

// age sorting
person.sort(function(a,b){return a.age - b.age});
displayPerson();

function displayPerson(){
    document.getElementById("demo12").innerHTML = person[0].name + " " + person[0].age + "<br>"+
                                                person[1].name + " " + person[1].age + "<br>"+
                                                person[2].name + " " + person[2].age;
}

// name sorting
function sortString() {
    person.sort(function(a, b){
      let x = a.name.toLowerCase();
      let y = b.name.toLowerCase();
      if (x < y) {return -1;}
      if (x > y) {return 1;}
      return 0;
    });
    displayPersons();
  }
  function displayPersons(){
    document.getElementById("demo13").innerHTML = person[0].name + " " + person[0].age + "<br>"+
                                                person[1].name + " " + person[1].age + "<br>"+
                                                person[2].name + " " + person[2].age;
}
  
// Stable Array sort()
const myArr = [
    {name:"X00",price:100 },
    {name:"X01",price:100 },
    {name:"X02",price:100 },
    {name:"X03",price:100 },
    {name:"X04",price:110 },
    {name:"X05",price:110 },
    {name:"X06",price:110 },
    {name:"X07",price:110 },
    {name:"X08",price:120 },
    {name:"X09",price:120 },
    {name:"X10",price:120 },
    {name:"X11",price:120 },
    {name:"X12",price:130 },
    {name:"X13",price:130 },
    {name:"X14",price:130 },
    {name:"X15",price:130 },
    {name:"X16",price:140 },
    {name:"X17",price:140 },
    {name:"X18",price:140 },
    {name:"X19",price:140 }
];
myArr.sort( (p1, p2) => {
    if (p1.price < p2.price) return -1;
    if (p1.price > p2.price) return 1;
    return 0;
  });
  
  let txt = "";
  myArr.forEach(stableArray);
  
  function stableArray(value) {
    txt += value.name + " " + value.price + "<br>"; 
  }
  document.getElementById("demo14").innerHTML = txt;