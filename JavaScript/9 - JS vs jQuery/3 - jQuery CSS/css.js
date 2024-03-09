// Hiding HTML Elements

$(document).ready(function(){
    $("#btn").click(function(){
        $("#demo1").hide();
    });
});

// use js
const btn1 = document.getElementById("btn1");

btn1.addEventListener("click",function(){
    document.getElementById("demo2").style.display = "none";
});

// Showing HTML Elements
$(document).ready(function(){
    $("#btn2").click(function(){
        $("#demo3").show();
    });
});

// use js
const btn3 = document.getElementById("btn3");

btn3.addEventListener("click",function(){
    document.getElementById("demo4").style.display = "block";
});

// Styling HTML Elements

$(document).ready(function(){
    $("#btn4").click(function(){
        $("#demo5").css("font-size","35px");
    });
});

// use js
const btn5 = document.getElementById("btn5");

btn5.addEventListener("click",function(){
    document.getElementById("demo6").style.color = "red";
});