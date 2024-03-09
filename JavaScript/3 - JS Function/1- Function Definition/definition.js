function multiplication(a,b){
    return a*b;
}

let mul = multiplication(2,3);

// additon
const add = function(a,b){return a+b};

// Function() Constructor
// subtraction
const sub = new Function("a", "b", "return a - b");

document.getElementById("demo1").innerHTML = 
`Multiplication : `+ mul+ "<br>"+
`Addition : `+ add(5,2) + "<br>"+
`Subtraction : `+sub(5,2);


// Self-Invoking Functions
(function () {
    document.getElementById("demo2").innerHTML = "Hello! My name is Disha";
})();

document.getElementById("demo3").innerHTML = "Multiplication :" +mul*2;

// Functions are Objects
function length(a, b) {
    return arguments.length;
}
document.getElementById("demo4").innerHTML = "argument Length is :"+ length(5,2) + "<br>"+
"multiplication.toString() : "+multiplication.toString();

// Arrow Functions
const div = (x,y) => x/y;
document.getElementById("demo5").innerHTML = "Division : " + div(5,2);