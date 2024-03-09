// new map()

// Create a Map
const fruits = new Map([
    ["apples", 500],
    ["bananas", 300],
    ["oranges", 200]
  ]);

document.getElementById("demo1").innerHTML = 
"Apples price : " +fruits.get("apples");

// Map.set()
const fruits1 = new Map();

// set Msp values
fruits1.set("apples", 500);
fruits1.set("bananas", 300);
fruits1.set("oranges", 200);

document.getElementById("demo2").innerHTML =
 "bananas price : "+fruits1.get("bananas");


//  Map.get()
document.getElementById("demo3").innerHTML = 
"fruits.get('apples') :"+fruits.get("apples");

// Map.size
document.getElementById("demo4").innerHTML = 
"size of fruits : "+ (fruits.size);

// Map.delete()
fruits.delete("apples");

document.getElementById("demo5").innerHTML = "fruits  : " +fruits.size;

// Map.clear()
fruits.clear();
document.getElementById("demo6").innerHTML = 
"fruits.clear() : "+fruits.size;

// Map.has()
document.getElementById("demo7").innerHTML = 
"fruits1.has('apples') : " +fruits1.has("apples");

// Maps are Objects
document.getElementById("demo8").innerHTML = 
"types of : "+typeof fruits + "<br>"+
" fruits instanceof Map : "+ (fruits instanceof Map);

// Map.forEach()
let txt = "";
fruits1.forEach(function(value,key){
    txt += key + " = "+ value + "<br>"
})
document.getElementById("demo9").innerHTML = txt;

// Map.entries()
let txt1 = "";
for(const x of fruits1.entries()){
    txt1 += x + "<br>"
}
document.getElementById("demo10").innerHTML = txt1;

// Map.keys()
let txt2 = "";
for(const x of fruits1.keys()){
    txt2 += x + "<br>"
}

document.getElementById("demo11").innerHTML = txt2;

// Map.values()
let txt3 = "";
for(const x of fruits1.values()){
    txt3 += x + "<br>"
}
// total price
let total = 0;
for (const x of fruits1.values()) {
  total += x;
}

document.getElementById("demo12").innerHTML = txt3 + "<br>"+"total price : "+total;

// Objects as Keys

// create Objects
const apples = {name : 'Apples'};
const bananas = {name: 'Bananas'};
const oranges = {name: 'Oranges'};

// Create a Map
const fruits2 = new Map();

// Add the Objects to the Map
fruits2.set(apples, 500);
fruits2.set(bananas, 300);
fruits2.set(oranges, 200);

document.getElementById("demo13").innerHTML =
"fruits2.get(apples) : "+ fruits2.get(apples) +"<br>"+
"fruits2.get('apples') : "+fruits2.get('apples');