// Callback Functions

function myDisplayers(somethimg){
    document.getElementById("demo1").innerHTML = somethimg;
}

function myCalculator(num1, num2, callback){
    let sum = num1 + num2;
    callback(sum);
}

myCalculator(5, 5 , myDisplayers);

// Waiting for a Timeout
setTimeout(myFunction, 3000);

function myFunction(){
    document.getElementById("demo2").innerHTML = "My name is Disha!!!!";
}

setTimeout(function(){
    myFunction1("I Love You!!!");
}, 4000);

function myFunction1(value){
    document.getElementById("demo3").innerHTML = value;
}

// Waiting for Intervals
setInterval(myFunction2, 1000);

function myFunction2(){
    let date =  new Date();

    document.getElementById("demo4").innerHTML = 
    date.getHours() + ":"+
    date.getMinutes() + ":"+
    date.getSeconds();
}


