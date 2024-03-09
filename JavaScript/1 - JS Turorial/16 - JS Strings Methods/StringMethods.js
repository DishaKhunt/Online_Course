let ans = document.getElementById("demo");


// String Methods

// string Length
let userName = "DishaKhunt";
ans.innerHTML = userName+"<br>"+"The length of string is : "+ userName.length +"<br>";

// String charAt()
document.getElementById("demo1").innerHTML = "First character is : "+ userName.charAt(0)+"<br>"+
                                              "First Character code is : "+userName.charCodeAt(0)+"<br>"+
                                              "String at(2) method : "+userName.at(2)+"<br>"+
                                              "string [1] method : "+userName[1];


//string parts
// string slice
document.getElementById("demo2").innerHTML = "String slice(5,10) : "+userName.slice(5,10) +"<br>"+
                                             "String slice(3) : "+userName.slice(3)+"<br>"+
                                             "String slice(-4) : "+userName.slice(-4)+"<br>"+
                                             "string slice(- 10,-5) : "+userName.slice(-10,-5);   

// string substring
document.getElementById("demo3").innerHTML = "String Substring(0,5) : "+userName.substring(0,5)+"<br>"+
                                            " String substr(5,10) : "+userName.substr(5,10)+"<br>"+
                                            " string substr(0) : "+userName.substr(0)+"<br>"+
                                            "string substr(-5) : "+userName.substr(-5);

// Substring , substr similar to slice.

// string Upper case and lower case
document.getElementById("demo4").innerHTML = "Lower Case is : "+userName.toLowerCase()+"<br>"+
                                            " Upper Case is : "+userName.toUpperCase();

// String concat()
let firstName = "Disha";
let lastName = "Khunt";
let fullName = firstName.concat("",lastName);
document.getElementById("demo5").innerHTML ="String concat : "+fullName;

// strig strim()
let str = "       Hello Disha!!!      ";
let str1 = str.trim();
let str2 = str.trimStart();
let str3 = str.trimEnd();
document.getElementById("demo6").innerHTML = "length : "+str.length +"<br>"+
                                            "trim length : "+str1.length + "<br>"+
                                            "trimStart length : "+str2.length+"<br>"+
                                            "trimEnd length : "+str3.length;
                                        
// String Padding
let text = "5";
let num = 5;
let string = num.toString();
let padded1 = text.padStart(5,"0");
let padded2 = text.padStart(6,"a");
let padded3 = text.padEnd(3,"0");
let padded4 = text.padEnd(4,"x");
let padded5 = string.padEnd(5,1);
let padded6 = string.padStart(4,1);
document.getElementById("demo7").innerHTML = ' String PadStart(5,"0") : '+padded1 +"<br>"+
                                                'String PadStart(6,"a") : '+padded2 +"<br>"+
                                                ' String PadEnd(3,"0") : '+padded3 +"<br>"+
                                                ' String PadEnd(4,"x") : '+padded4 +"<br>"+
                                                ' String PadEnd(5,1) : '+padded5 +"<br>"+
                                                ' String PadStart(4,1) : '+padded6 +"<br>";

// String repeat
let result = userName.repeat(2);
document.getElementById("demo8").innerHTML = "String repeat(2) : "+ result;

// string replace
// The replace() method is case sensitive. 
function replace(){
    let text = document.getElementById("demo9").innerHTML;
    document.getElementById("demo9").innerHTML = text.replace("Disha","JavaScript");
}

let replace_str = " visit Microsoft and Microsoft!";
let newText = replace_str.replace("Microsoft","W3Schools");
let newText1 = replace_str.replace("MICROSOFT", "W3Schools");
let newText2 = replace_str.replace(/MICROSOFT/i, "W3Schools");
let newText3 = replace_str.replace(/Microsoft/g, "W3Schools");

document.getElementById("demo10").innerHTML = replace_str+"<br>"+
                                               'replace("Microsoft","W3Schools") : '+ newText+"<br>"+
                                               'replace("MICROSOFT", "W3Schools") :'+ newText1+"<br>"+
                                                'replace(/MICROSOFT/i, "W3Schools") : '+newText2+"<br>"+
                                                'replace(/Microsoft/g, "W3Schools") : '+newText3;

// String Replace ALL
let replaceAll = "I love cats. Cats are very easy to love. Cats are very popular.";
replaceAll = replaceAll.replaceAll("Cats","Dogs");
replaceAll = replaceAll.replaceAll("cats","dogs");

document.getElementById("demo11").innerHTML = replaceAll;


// String split
let cars = "Thar, BMW, Audi, Verna";
const myArr = cars.split(",");
cars = " ";
for (let i = 0; i < myArr.length; i++) {
  cars += myArr[i] + "<br>"
}
document.getElementById("demo12").innerHTML = cars;


