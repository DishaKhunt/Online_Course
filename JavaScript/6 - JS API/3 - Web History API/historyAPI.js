// History back() Method

function myFunction() {
  window.history.back();
}
// History go() Method

function myFunction1(){
    window.history.go(-2);
}

// The history.length Property
let length = window.history.length;
document.getElementById("demo1").innerHTML = "Number of URLs in history list : "+ length;