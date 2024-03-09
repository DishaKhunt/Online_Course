// use back ticks
let str = `Hello, Disha!`;
// single and double quotes inside a string 
let str1 =  `She's often called "Disha"`;

// Multiline string
let str2 = `hello,
my name
is disha`;

document.getElementById("demo1").innerHTML = "use back ticks (``) : "+str+"<br>"+
                                            "single and double quotes inside a string : "+str1+"<br>"+
                                            "Multiline String : "+str2;

 
let  firstName = "Disha";
let lastName ="Khunt";
let price = 10;
let VAT = 1.5;
document.getElementById("demo2").innerHTML = `welcome, ${firstName} ${lastName}!`+"<br>"+
                                            `Total : ${(price*(1+VAT)).toFixed(2)}`;