// new Map() Method

const fruits = new Map([
    ["Apples" , 500],
    ["Bananas" , 300],
    ["Oranges", 200]
])
document.getElementById("demo1").innerHTML = "Appels price is : " +fruits.get("Apples");

// set() Method
const obj = new Map();

obj.set("Apples", 500);
obj.set("Bananas", 300);
obj.set("Oranges", 200);

document.getElementById("demo2").innerHTML = "Using Map.set() : " +"<br>"+"Bananas price is : " +obj.get("Bananas");

const obj1 = new Map([
    ["apples", 500],
    ["bananas", 300],
    ["oranges", 200]
  ]);
  
  obj1.set("apples", 200);
  
  document.getElementById("demo3").innerHTML = "Appels price is : "+obj1.get("apples");

//   The get() Method
const fruit = new Map([
    ["Apples" , 500],
    ["Bananas" , 300],
    ["Oranges", 200]
])
document.getElementById("demo4").innerHTML = "Appels price is : " +fruit.get("Apples");

// The size Property
document.getElementById("demo5").innerHTML = "Using Map.size : "+fruits.size;

// delete() Method
fruits.delete("Apples");

document.getElementById("demo6").innerHTML = "Deleting Map elements : "+fruits.size;

// has() Method

document.getElementById("demo7").innerHTML = 
"fruits.has('Apples') : "+ fruits.has("Apples")+"<br>"+
"fruits.has('Bananas') : "+ fruits.has("Bananas");

//  forEach() Method

let text = "";
fruits.forEach (function(value, key) {
  text += key + ' = ' + value + "<br>"
})

document.getElementById("demo8").innerHTML = text;

// entries() Method
let text1 = "";
for (const x of fruits.entries()) {
  text1 += x + "<br>";
}

document.getElementById("demo9").innerHTML = text1;