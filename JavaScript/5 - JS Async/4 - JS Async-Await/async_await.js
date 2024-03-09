function myDisplayer(some){
    document.getElementById("demo1").innerHTML = some;
}

async function myFunction(){
    return "Hello";
}

myFunction().then(
    function(value){
        myDisplayer(value);
    },
    function(error){
        myDisplayer(error);
    }
);


// await
// Basic Syntax
async function myDisplayer1(){
    let myPromise = new Promise((resolve,reject) => {
        resolve("Hello Dishhhaaa....");
    });

    document.getElementById("demo2").innerHTML = await myPromise;
}

myDisplayer1();

// without reject
async function myDisplayer2(){
    let myPromise = new Promise((resolve) => {
        resolve("Dishhhaaa....");
    });

    document.getElementById("demo3").innerHTML = await myPromise;
}
myDisplayer2();

// Waiting for a Timeout
async function myDisplayer3(){
    let myPromise = new Promise((resolve) => {
       setTimeout(()=>{
        resolve("My name is Dishhhaaa....");
       }, 3000);
    });

    document.getElementById("demo4").innerHTML = await myPromise;
}
myDisplayer3();

// Waiting for a File
async function getFile() {
    let myPromise = new Promise(function(resolve) {
      let req = new XMLHttpRequest();
      req.open('GET', "../3 - JS Promises/mycar.html");
      req.onload = function() {
        if (req.status == 200) {
          resolve(req.response);
        } else {
          resolve("File not Found");
        }
      };
      req.send();
    });
    document.getElementById("demo5").innerHTML = await myPromise;
  }
  
getFile();