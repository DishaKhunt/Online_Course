// Function Sequence

function myDisplayer(some){
    document.getElementById("demo1").innerHTML = some;
}

function myFirst(){
    myDisplayer("Hello");
}

function mySecond(){
    myDisplayer("Disha");
}

// call funcction
// myFirst();
// mySecond();

mySecond();
myFirst();

// Sequence Control
function myDisplayer1(some){
    document.getElementById("demo2").innerHTML = "Result is : " + some;
}
function myCalculator(num1, num2){
    let sum = num1 + num2;
    return sum;
}

let result = myCalculator(5, 2);
myDisplayer1(result);

// function myCalculator1(num1, num2){
//     let sum = num1 + num2;
//     myDisplayer1(sum);
// }
// myCalculator1(5,5);


// Callbacks
function myDisplayer2(something){
    document.getElementById("demo3").innerHTML = something;
}

function myCalculator2(num1, num2, myCallback){
    let sum = num1 + num2;
    myCallback(sum);
}
myCalculator2(5, 5 , myDisplayer2);

// create an Array
const myNumbers = [4, 1, -20, -7, 5, 9, -6];

// Call REmove negative with a callback
const posNumbers = removeNeg(myNumbers, (x)=> x >= 0);

// Display result
document.getElementById("demo4").innerHTML = "Positive Numbers : " +posNumbers;

// Remove negative numbers
function removeNeg(numbers, callback){
    const myArray = [];

    for(const x of numbers){
        if(callback(x)){
            myArray.push(x);
        }
    }
    return myArray;
}

