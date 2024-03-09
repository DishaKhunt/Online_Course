// Removing HTML Elements

$(document).ready(function(){
    $("#btn").click(function(){
        $("#demo1").remove();
    });
});

// use js
const btn1 = document.getElementById("btn1");

btn1.addEventListener("click",function(){
    document.getElementById("demo2").remove();
});

// Get Parent Element
$(document).ready(function(){
    $("#btn2").click(function(){
        $("#demo3").text($("#demo1").parent().prop("nodeName"));
    });
});

// use js
const btn3 = document.getElementById("btn3");

btn3.addEventListener("click",function(){
    document.getElementById("demo4").innerHTML = document.getElementById("demo1").parentNode.nodeName;
});
