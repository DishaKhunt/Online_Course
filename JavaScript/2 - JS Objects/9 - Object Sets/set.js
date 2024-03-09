// JavaScript Sets

// The new Set() Method

// Create a Set
const letters = new Set(["d","i","s", "h", "a"]);

// Display set.size
document.getElementById("demo1").innerHTML = 
"Array size is : "+ letters.size;

const letters1 = new Set();

// Add Values to  the set
letters1.add("k");
letters1.add("h");
letters1.add("u");
letters1.add("n");
letters1.add("t");

document.getElementById("demo2").innerHTML =
"Array size is :" +letters1.size;

// The add() Method
letters.add("k");
letters.add("h");
letters.add("u");
letters.add("n");
letters.add("t");
document.getElementById("demo3").innerHTML = 
"Array size is : "+letters.size;


// forEach() Method
let txt = "";
letters.forEach(function (value){
    txt += value + "<br>";
})

document.getElementById("demo4").innerHTML = txt;

// values() Method
document.getElementById("demo5").innerHTML = letters.values();

// List all Elements
let text = "";
for (const x of letters.values()) {
  text += x + "<br>";
}
document.getElementById("demo6").innerHTML = text;

// keys() Method
document.getElementById("demo7").innerHTML = letters.keys();

// entries() Method
const iterator = letters.entries();

// List all Entries2
let text1 = "";
for (const entry of iterator) {
  text1 += entry + "<br>";
}
document.getElementById("demo8").innerHTML = text1;

// Sets are Objects
document.getElementById("demo9").innerHTML = "types of : " +typeof letters;

document.getElementById("demo10").innerHTML = "letters instanceof Set :"+ (letters instanceof Set);
