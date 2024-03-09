// Set Text Content

$(document).ready(function(){
    var myElement = $("#demo1");

    myElement.text("Hello ! How are you?");
});

// js
const myElement = document.getElementById("demo2");
myElement.innerHTML = "Hello! How are you?";

// Get Text Content

// jquery
$(document).ready(function(){
    var myText = $("#01").text();

    $("#demo3").text(myText);
});

// javscript
const myText = document.getElementById("01").textContent;
document.getElementById("demo4").innerHTML = myText;

// Set HTML Content

// jQuery
$(document).ready(function(){
    $('#demo5').html("<p>Hello Dishaa!!!</p>");
});

// js
document.getElementById("demo6").innerHTML = "<p>Hello Dishaaaa!!</p>";

// Get HTML Content

// jQuery
$(document).ready(function(){
    var content = $("#01").html();

    $("#demo7").html(content);
});

// js
const content = document.getElementById("01").innerHTML;
document.getElementById("demo8").innerHTML = content;