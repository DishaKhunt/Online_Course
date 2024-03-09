// catch

try{

    adddlert("Welcome guest!!");
}
catch(err){
    document.getElementById("demo1").innerHTML = err.message;
}

// Input Validation
function myFunction() {
    const message = document.getElementById("demo2");
    message.innerHTML = "";
    let x = document.getElementById("inp").value;
    try { 
      if(x.trim() == "")  throw "empty";
      if(isNaN(x)) throw "not a number";
      x = Number(x);
      if(x < 5)  throw "too low";
      if(x > 10)   throw "too high";
    }
    catch(err) {
      message.innerHTML = "Input is " + err;
    }
  }

//   finally Statement
function myFunction1() {
    const message = document.getElementById("demo3");
    message.innerHTML = "";
    let x = document.getElementById("inp1").value;
    try { 
      if(x.trim() == "")  throw "is empty";
      if(isNaN(x)) throw "is not a number";
      x = Number(x);
      if(x > 10)   throw "is too high";
      if(x < 5)  throw "is too low";
    }
    catch(err) {
      message.innerHTML = "Input " + err;
    }
    finally {
      document.getElementById("demo3").value = "";
    }
  }


//  RangeError
let num = 1;
try {
  num.toPrecision(500);   // A number cannot have 500 significant digits
}
catch(err) {
  document.getElementById("demo4").innerHTML = err.name;
}

// Reference Error
let x = 5;
try {
  x = y + 1;  // y cannot be used (referenced)
}
catch(err) {
  document.getElementById("demo5").innerHTML = err.name;
}

// SyntaxError
try {
    eval("alert('Hello)"); // Missing ' will produce an error
  }
  catch(err) {
    document.getElementById("demo6").innerHTML = err.name;
  }

// Type Error
let num1 = 1;
try {
  num1.toUpperCase();   // You cannot convert a number to upper case
}
catch(err) {
  document.getElementById("demo7").innerHTML = err.name;
}

// URI (Uniform Resource Identifier) Error
try {
    decodeURI("%%%");   // You cannot URI decode percent signs
  }
  catch(err) {
    document.getElementById("demo8").innerHTML = err.name;
  }