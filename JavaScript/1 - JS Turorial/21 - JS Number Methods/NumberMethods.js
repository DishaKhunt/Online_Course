// toString()
let x = 523;
document.getElementById("demo1").innerHTML =  "x.toString() : "+x.toString()+"<br>"+
                                                "(523).toString() : "+(523).toString()+"<br>"+
                                                "(500+23).toString() : "+(500+23).toString();

// toExponential() Method
let y = 9.656;
document.getElementById("demo2").innerHTML = "y.toExponentaial() : "+y.toExponential()+"<br>"+
                                            "y.toExponentaial(2) : "+y.toExponential(2)+"<br>"+
                                            "y.toExponentaial(4) : "+y.toExponential(4)+"<br>"+
                                            "y.toExponentaial(6) : "+y.toExponential(6)+"<br>";
                                           
// toFixed() Method
document.getElementById("demo3").innerHTML = "y.toFixed() : "+y.toFixed()+"<br>"+
                                            "y.toFixed(2) : "+y.toFixed(2)+"<br>"+
                                            "y.toFixed(4) : "+y.toFixed(4)+"<br>"+
                                            "y.toFixed(6) : "+y.toFixed(6)+"<br>";

// toPrecision() Method
document.getElementById("demo4").innerHTML = "y.toPrecision() : "+y.toPrecision()+"<br>"+
                                            "y.toPrecision(2) : "+y.toPrecision(2)+"<br>"+
                                            "y.toPrecision(4) : "+y.toPrecision(4)+"<br>"+
                                            "y.toPrecision(6) : "+y.toPrecision(6)+"<br>";

// valueOf() Method
document.getElementById("demo5").innerHTML =  "x.valueOf() : "+x.valueOf()+"<br>"+
                                                "(523).valueOf() : "+(523).valueOf()+"<br>"+
                                                "(500+23).valueOf() : "+(500+23).valueOf();

// Converting Variables to Numbers
// Number() method
document.getElementById("demo6").innerHTML = " Number(true) : "+ Number(true)+"<br>"+
                                            " Number(false) : "+Number(false)+"<br>"+
                                           'Number("52") : '+ Number("52") + "<br>" + 
                                           'Number("  52") : '+Number("  52") + "<br>" +
                                           'Number("52  ") : '+Number("52  ") + "<br>" +
                                           'Number(" 52  ") : '+Number(" 52  ") + "<br>" +
                                           'Number("52.3") : '+Number("52.3") + "<br>" + 
                                           'Number("52,3") : '+Number("52,3") + "<br>" +
                                           'Number("52 3") : '+Number("52 3") + "<br>" +
                                           'Number("Disha") : '+Number("Disha");
// The Number() Method Used on Dates
let z = new Date("2024-01-01");
document.getElementById("demo7").innerHTML = Number(z);

// parseInt() Method
document.getElementById("demo8").innerHTML = 'parseInt("-10") : '+parseInt("-10") + "<br>" +
                                            'parseInt("-10.33") : '+  parseInt("-10.33") + "<br>" +
                                            'parseInt("10") : '+parseInt("10") + "<br>" +
                                            'parseInt("10.33") : '+parseInt("10.33") + "<br>" +
                                            'parseInt("10 6") : '+parseInt("10 6") + "<br>" +  
                                            'parseInt("10 years") : '+parseInt("10 years") + "<br>" +  
                                            'parseInt("years 10") : '+parseInt("years 10");  


// parseFloat() Method
document.getElementById("demo9").innerHTML = 'parseFloat("-10") : '+parseFloat("-10") + "<br>" +
                                            'parseFloat("-10.33") : '+  parseFloat("-10.33") + "<br>" +
                                            'parseFloat("10") : '+parseFloat("10") + "<br>" +
                                            'parseFloat("10.33") : '+parseFloat("10.33") + "<br>" +
                                            'parseFloat("10 6") : '+parseFloat("10 6") + "<br>" +  
                                            'parseFloat("10 years") : '+parseFloat("10 years") + "<br>" +  
                                            'parseFloat("years 10") : '+parseFloat("years 10");  

// Number.isInteger()
// Number.isSafeInteger()
document.getElementById("demo10").innerHTML = "Number.isInteger(52) : "+Number.isInteger(52)+"<br>"+
                                            "Number.isInteger(52.3) : "+Number.isInteger(52.3)+"<br>"+"<br>"+
                                            "<h4>Number.isSafeInteger() Method</h4>"+
                                            "Number.isSafeInteger(52) : "+Number.isSafeInteger(52)+"<br>"+
                                            "Number.isSafeInteger(12345678901234567890) : "+Number.isSafeInteger(12345678901234567890);
        
// Number.parseFloat() Method
document.getElementById("demo11").innerHTML = 'Number.parseFloat("-10") : '+Number.parseFloat("-10") + "<br>" +
                                            'Number.parseFloat("-10.33") : '+  Number.parseFloat("-10.33") + "<br>" +
                                            'Number.parseFloat("10") : '+Number.parseFloat("10") + "<br>" +
                                            'Number.parseFloat("10.33") : '+Number.parseFloat("10.33") + "<br>" +
                                            'Number.parseFloat("10 6") : '+Number.parseFloat("10 6") + "<br>" +  
                                            'Number.parseFloat("10 years") : '+Number.parseFloat("10 years") + "<br>" +  
                                            'Number.parseFloat("years 10") : '+Number.parseFloat("years 10");  

// Number.parseInt() Method
document.getElementById("demo12").innerHTML = 'Number.parseInt("-10") : '+Number.parseInt("-10") + "<br>" +
                                            'Number.parseInt("-10.33") : '+  Number.parseInt("-10.33") + "<br>" +
                                            'Number.parseInt("10") : '+Number.parseInt("10") + "<br>" +
                                            'Number.parseInt("10.33") : '+Number.parseInt("10.33") + "<br>" +
                                            'Number.parseInt("10 6") : '+Number.parseInt("10 6") + "<br>" +  
                                            'Number.parseInt("10 years") : '+Number.parseInt("10 years") + "<br>" +  
                                            'Number.parseInt("years 10") : '+Number.parseInt("years 10");  