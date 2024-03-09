// Iterating Over a String
const name = "Disha Khunt";
let str = "";
for(const x of name){
    str += x + "<br>";
}

document.getElementById("demo1").innerHTML = str;

// Iterating Over an Array
const letters = ["D", "I", "S", "H", "A"];
let letter = "";

for(const x of letters){
    letter += x + "<br>";
}
document.getElementById("demo2").innerHTML = letter;

// Iterating Over a Set
const letters1 = new Set(["d", "i", "s", "h", "a"]);
let letter_set =  "";
for(const x of letters1){
    letter_set += x + "<br>";
}
document.getElementById("demo3").innerHTML = letter_set;

// Iterating Over a Map
const fruits = new Map ([
    ["apples", 500],
    ["banana", 300],
    ["orange", 200]
])

let fruit = "";
for(const x of fruits){
    fruit += x + "<br>";
}

document.getElementById("demo4").innerHTML = fruit;