// Integer Precision

let x = 999999999999999;
let y = 9999999999999999;

document.getElementById("demo1").innerHTML = x+"<br>"+y;

// Floating Precision
let a = 0.2;
let b = 0.1;
let c = a+b;
let d = (a*10 + b*10) / 10

document.getElementById("demo2").innerHTML = "0.2 + 0.1 = "+ c +"<br>"+
                                            " 0.2 +0.1 = "+d;

// Adding number and string
let p = 20;
let q = 10;
let r = "20";
let s = "10";
let t = "30";
let ans1 = p+q;
let ans2 = r+s;
let ans3 = p+s;
let ans4 = r+q;
let ans5 = p+q+t;

document.getElementById("demo3").innerHTML = "20+10 = "+ans1+"<br>"+
                                            '"20"+"10" = '+ans2+"<br>"+
                                            '20+"10" = '+ans3+"<br>"+
                                            '"20"+10 = '+ans4+"<br>"+
                                            '20+10+"30" = '+ans5;

// Numaric String
let x1 = "100";
let x2 = "10";
let result = x1/x2;
let result1 = x1*x2;
let result2 = x1-x2;
let result3 = x1+x2;
document.getElementById("demo4").innerHTML = "division : "+result+"<br>"+
                                            "Multiplication : "+result1+"<br>"+
                                            "subtraction : "+result2+"<br>"+
                                            "addition : "+result3;

// NaN - Not a Number

let name = "Apple";
let n = NaN;
let result4 = 100/"Apple"; 
let result5 = n+100;
let result6 = n+"100";
document.getElementById("demo5").innerHTML = "100/'Apple' : "+result4 +"<br>"+
                                            " use function isNaN(5): "+ isNaN(result4)+"<br>"+
                                            " NaN+100 : "+   result5+"<br>"+
                                            "NaN+'100' : "+  result6+"<br>"+
                                            "types of NaN : "+ typeof n;

// Infinity
let number = 2; 
let txt = "";
while (number != Infinity) {
   number = number * number;
   txt = txt + number + "<br>";
}
document.getElementById("demo6").innerHTML = txt;

let y1 = 2/0;
let y2 = -2/0;

document.getElementById("demo7").innerHTML = "2/0 : "+y1 +"<br>"+
                                            "-2/0 : "+y2+"<br>"+
                                            "type of : "+Infinity;

// Hexadecimal

let hex = 0xFF;
let myNumber = 32;

document.getElementById("demo8").innerHTML = "0xFF : "+ hex+"<br><br>"+
                                            "Decimal 32 : "+"<br>"+
                                            "Hexatrigesimal (base 36): " + myNumber.toString(36) + "<br>" +
                                            "Duotrigesimal (base 32): " + myNumber.toString(32) + "<br>" +
                                            "Hexadecimal (base 16): " + myNumber.toString(16) + "<br>" +
                                            "Duodecimal (base 12): " + myNumber.toString(12) + "<br>" +
                                            "Decimal (base 10): " + myNumber.toString(10) + "<br>" +
                                            "Octal (base 8): " + myNumber.toString(8) + "<br>" +
                                            "Binary (base 2): " + myNumber.toString(2);;

// Numbers as Objects
let a1 = 52;
let a2 = new Number(52);
let a3 = new Number(52);

document.getElementById("demo9").innerHTML = "types of 52 : "+ typeof a1 +"<br>"+
                                            "types of new Number(52) : "+typeof a2 +"<br>"+
                                            "a1 == a2 : "+(a1==a2) +"<br>"+
                                            "a1 === a2 : "+(a1===a2) +"<br>"+
                                            "a2 == a3 : "+(a2==a3) +"<br>"+
                                            "a2 === a3 : "+(a2===a3) +"<br>";