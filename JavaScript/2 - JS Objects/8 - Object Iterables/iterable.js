// Iterating Over a String

// create a string
const name  = "Disha";

// List all elements
let txt = "";
for(const x of name){
    txt += x + "<br>";
} 
document.getElementById("demo1").innerHTML = txt;

// Iterating Over an Array
// Create aa Array
const letters = ["D","I","S", "H", "A"];

// List all Elements
let txt1 = "";
for (const x of letters) {
  txt1 += x + "<br>";
}

document.getElementById("demo2").innerHTML = txt1;

// Home Made Iterable
function myNumbers(){
    let n = 0;
    return {
        next: function(){
            n += 10;
            return {
                value: n, 
                done: false
            };
        }
    };
}

// create iterable
const n = myNumbers();
n.next(); //10
n.next(); //20
n.next(); //30

document.getElementById("demo3").innerHTML = n.next().value;

// Symbol.iterator

// create zn Object
myNumber = {};

// MAke it Iterable
myNumber[Symbol.iterator] = function(){
    let n = 0;
    done = false;
    return{
        next(){
            n += 10;
            if(n == 100){
                done = true
            }
            return{
                value: n,
                done: done
            };
        }
    };
}

let txt2 = "";
for(const num of myNumber){
    txt2 += num + "<br>";
}
document.getElementById("demo4").innerHTML = txt2;

// other type
let iterator = myNumber[Symbol.iterator]();

let txt3 = "";
while(true){
    const result = iterator.next();
    if(result.done) break;
    txt3 += result.value + "<br>";
}
document.getElementById("demo5").innerHTML = txt3;