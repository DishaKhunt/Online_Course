document.getElementById("demo1").innerHTML = Math.random();

// JavaScript Random Integers
document.getElementById("demo2").innerHTML = "Math.floor(Math.random() * 10) 🟰 "+ Math.floor(Math.random() * 10)+"<br>"+
                                            "Math.floor(Math.random() * 11) 🟰 "+ Math.floor(Math.random() * 11)+"<br>"+
                                            "Math.floor(Math.random() * 100) 🟰 "+ Math.floor(Math.random() * 100)+"<br>"+
                                            "Math.floor(Math.random() * 101) 🟰 "+ Math.floor(Math.random() * 101);

let random1 =  Math.floor(Math.random() * 10) + 1;
let random2 =  Math.floor(Math.random() * 100) + 1;
document.getElementById("demo3").innerHTML =  "Math.floor(Math.random() * 10)+1  🟰 "+ random1+"<br>"+
                                            "Math.floor(Math.random() * 100)+1  🟰 "+ random2;

// A Proper Random Function
function getRndInteger1(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

document.getElementById("demo4").innerHTML = "getRndInteger1(0,10) 🟰 "+getRndInteger1(0,10);

function getRndInteger2(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
document.getElementById("demo5").innerHTML = "getRndInteger2(1,10) 🟰"+getRndInteger2(1,10);