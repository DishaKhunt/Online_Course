// web storage API

localStorage.setItem("name","Disha Khunt");
document.getElementById("demo1").innerHTML = localStorage.getItem("name");


// sessionStorage Object
sessionStorage.setItem("name", "Disha Khunt");
document.getElementById("demo2").innerHTML = sessionStorage.getItem("name");


// Storage key() Method
function myFunction(){
    var x = localStorage.key(0);
    document.getElementById("demo3").innerHTML = x;
}


function createItems(){
    sessionStorage.test1 = "Hello";
    sessionStorage.test2 = "Disha";
    sessionStorage.test3 = 523;
}

function myFunction1() {
    var x = sessionStorage.key(0);
    document.getElementById("demo4").innerHTML = x;
}

// local storage
function createItems1(){
    localStorage.setItem("mytime",Date.now());
    localStorage.setItem("myname","Disha");
    localStorage.setItem("myage",21);
}

function displayItems(){
    var l, i;

    document.getElementById("demo5").innerHTML = "";
    for(i = 0; i<localStorage.length; i++){
        x = localStorage.key(i);

        document.getElementById("demo5").innerHTML += x + "<br>";
    }
}

// Storage removeItem() Method
function deleteItem(){
    localStorage.removeItem("mytime");
}

function displayItem(){
    var x = localStorage.getItem("mytime");

    document.getElementById("demo6").innerHTML = x;
}

// Storage clear() Method
function deleteItems(){
    localStorage.clear();
}

function displayItems1(){
    var l,i;

    document.getElementById("demo7").innerHTML = "";

    for(i =0; i<localStorage.length; i++){
        x = localStorage.key(i);

        document.getElementById("demo7").innerHTML += x + "<br>"; 
    }
}


// localStorage Property
// same as a sessionStorage
clickCounter();

function clickCounter(){
    if(localStorage.clickcount){
        localStorage.clickcount = Number(localStorage.clickcount)+1;
    }
    else{
        localStorage.clickcount = 1;
    }

    document.getElementById("demo8").innerHTML = localStorage.clickcount;
}