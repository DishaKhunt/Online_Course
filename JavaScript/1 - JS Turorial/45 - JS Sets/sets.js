// The new Set() Method
const str = new Set(["d", "i", "s", "h" , "a"]);

document.getElementById("demo1").innerHTML = "Create a Set from an Array size : "+ str.size;

// add value
const str1 = new Set();

str1.add("d");
str1.add("i");
str1.add("s");
str1.add("h");
str1.add("a");

document.getElementById("demo2").innerHTML = "Add values to a Set : "+str1.size;


// ad variable to a set

const str2 = new Set();

const a = "d";
const b = "i";
const c = "s";
const d = "h";
const e = "a";

str2.add(a);
str2.add(b);
str2.add(c);
str2.add(d);
str2.add(e);

document.getElementById("demo3").innerHTML = "Add variables to a Set : "+ str2.size;

// The add() Method
const str3 = new Set(["d", "i", "s"]);
str3.add("h");

document.getElementById("demo4").innerHTML = "Adding new elements to a Set : "+str3.size;

// The forEach() Method
const str4 = new Set(["d", "i", "s", "h", "a"]);

let txt = "";
str4.forEach (function(value){
    txt += value + "<br>";
})

document.getElementById("demo5").innerHTML = txt;

// The values() Method
const str5 = new Set(["d","i","s", "h", "a"]);

document.getElementById("demo6").innerHTML = "Set.values() returns a Set Iterator : " + str5.values();

let txt1 = "";
for(const x of str5.values()){
    txt1 += x + "<br>";
}

document.getElementById("demo7").innerHTML = "Iterating Set values: " +"<br>"+txt1;