//  Bitwise Operations

document.getElementById("demo1").innerHTML = 
"5 & 1 🟰 " + (5&1) +"<br>"+
"5 | 1 🟰 "+(5|1)+ "<br>"+
"5 ^ 1 🟰 " +(5^1)+ "<br>"+
"~5  🟰 " +(~5) +"<br>"+
"5 << 1 🟰 " +(5 << 1)+"<br>"+
"5 >> 1 🟰 " +(5 >> 1)+"<br>"+
"5 >>> 1 🟰 " +(5 >>> 1)+ "<br>";


// Converting Decimal to Binary
document.getElementById("demo2").innerHTML = 
"-5 🟰"+dec2bin(-5)+ "<br>"+
"52 🟰 "+dec2bin(52);
function dec2bin(dec){
    return (dec >>> 0).toString(2);
}

//  Converting Binary to Decimal
document.getElementById("demo3").innerHTML = 
"101 🟰 "+bin2dec(101) + "<br>"+
"010  🟰 "+bin2dec(10);
function bin2dec(bin){
    return parseInt(bin, 2).toString(10);
}