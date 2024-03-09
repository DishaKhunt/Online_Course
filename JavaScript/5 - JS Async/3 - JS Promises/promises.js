// then() Method

function myDisplayer(some){
    document.getElementById("demo1").innerHTML = some;
}

let myPromise = new Promise(
    function(myResolve, myReject){
        let x = 0;

        if(x == 0){
            myResolve("OK");
        }
        else{
            myReject("Error");
        }
    }
);

myPromise.then(
    function(value){
        myDisplayer(value);
    },
    function(error){
        myDisplayer(error);
    }
);

// waiting for timeout
const myPromise1 = new Promise(
    function(myResolve, myReject){
        setTimeout(function(){
            myResolve("Hello!!!!!!<br> How are you???");
        }, 3000);
    }
);

myPromise1.then(
    function(value){
        document.getElementById("demo2").innerHTML = value;
    }
);

// Waiting for a file

//  using Callback
function myDisplayer1(some){
    document.getElementById("demo3").innerHTML = some;
}

function getFile(myCallback){
    let req = new XMLHttpRequest();
    req.onload = function(){
        if(req.status == 200){
            myCallback(this.responseText);
        }
        else{
            myCallback("Error: "+req.status);
        }
    }
    req.open('GET', "myCar.html");
    req.send();
}

getFile(myDisplayer1);


// using promise
function myDisplayer2(some){
    document.getElementById("demo4").innerHTML = some;
}

let myPromise2 = new Promise(
    function(myResolve, myReject){
        let req = new XMLHttpRequest();
        req.open('GET', "myCar.html");
        req.onload = function(){
            if(req.status == 200){
                myResolve(req.response);
            }
            else{
                myReject("File Not Found");
            }
        };
        req.send();
    }
);

myPromise2.then(
    function(value){
        myDisplayer2(value);
    },
    function(error){
        myDisplayer2(error);
    }
);