// jquery

$(document).ready(function(){
    var myElement = $("#id01");
    $('#demo1').text("The text form the id01 is : "+ myElement[0].innerHTML);
});

// js

const myElement = document.getElementById("id01");
document.getElementById("demo2").innerHTML = "The text from the id01 is : "+myElement.innerHTML ;

// Finding HTML Elements by Tag Name

$(document).ready(function(){
    var myElement = $("p");
    $('#demo3').text("The text form the first paragraph is : "+ myElement[0].innerHTML);
});

// js
const myElement1 = document.getElementsByTagName("p");
document.getElementById("demo4").innerHTML = "The text from the first paragraph is : "+myElement1[0].innerHTML ;

// Finding HTML Elements by Class Name

// jQuery
$(document).ready(function(){
    var myElement = $(".intro");
    $('#demo5').text("The first paragraph with class='intro' is : "+ myElement[0].innerHTML);
});

// js
const myElement2 = document.getElementsByClassName("intro");
document.getElementById("demo6").innerHTML = "The first paragraph with class='intro' is : "+myElement2[0].innerHTML ;

// Finding HTML Elements by CSS Selectors
// jQuery
$(document).ready(function(){
    var myElement = $("p.intro");
    $('#demo7').text("The first paragraph with class='intro' is : "+ myElement[0].innerHTML);
});

// js
const myElement3 = document.querySelectorAll("p.intro");
document.getElementById("demo8").innerHTML = "The first paragraph with class='intro' is : "+myElement2[0].innerHTML ;
