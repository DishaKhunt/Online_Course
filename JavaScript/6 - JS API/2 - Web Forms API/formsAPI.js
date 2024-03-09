// checkValidity() Method

function myFunction(){
    const inpObj = document.getElementById("id1");
    if(!inpObj.checkValidity()){
        document.getElementById("demo").innerHTML = inpObj.validationMessage;
    }
    else{
        document.getElementById("demo").innerHTML = "Input OK";
    }
}

// rangeOverflow Property
function myFunction1(){
    let txt;
    const inp = document.getElementById("id2");
    if(inp.validity.rangeOverflow){
        txt = "Value too large";
    }
    else{
        txt = "Input OK.";
    }
    document.getElementById("demo1").innerHTML = txt;
}

// rangeUnderflow Property
function myFunction2(){
    let txt;
    const inp = document.getElementById("id3");
    if(inp.validity.rangeUnderflow){
        txt = "Value is small.";
    }
    else{
        txt = "Input OK.";
    }
    document.getElementById("demo2").innerHTML = txt;
}

// customError
function myFunction3(){
    let txt;
    const inp = document.getElementById("id4");
    if(inp.validity.tooLong){
        txt = "value is too long";
    }
    else{
        txt = "Input OK";
    }
    document.getElementById("demo3").innerHTML = txt;
}

// patternMismatch
function myFunction4(){
    let txt;
    const inp = document.getElementById("id5");
    if(inp.validity.patternMismatch){
        txt = "patten is mismatch";
    }
    else{
        txt= "Input OK";
    }
    document.getElementById("demo4").innerHTML = txt;
}

// stepMismatch
function myFunction5(){
    let txt;
    const inp = document.getElementById("id6");
    if(inp.validity.stepMismatch){
        txt = "step is mismatch";
    }
    else{
        txt= "Input OK";
    }
    document.getElementById("demo5").innerHTML = txt;
}

// typeMismatch
function myFunction6(){
    let txt;
    const inp = document.getElementById("id7");
    if(inp.validity.typeMismatch){
        txt = "type is mismatch";
    }
    else{
        txt= "Input OK";
    }
    document.getElementById("demo6").innerHTML = txt;
}