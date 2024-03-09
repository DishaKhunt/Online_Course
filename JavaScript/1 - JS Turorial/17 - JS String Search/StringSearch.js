// method
// indexOf() 
// lastIndexOf()
// search()

let text = "Please locate where 'locate' occurs!";
let index = text.indexOf('locate');

document.getElementById("demo1").innerHTML = text+"<br>"+"'locate' indexof is : "+ index+"<br>"+
                                            "last index of locate is : "+text.lastIndexOf("locate")+"<br>"+
                                            "last index of Disha is : "+text.indexOf("Disha")+"<br>"+
                                            "indexOf('locate',15) : "+text.indexOf('locate',10)+"<br>"+
                                            "lastIndexOf('locate',15) : "+text.lastIndexOf('locate',10) +"<br>"+
                                            "Search('locate') : "+text.search("locate")+"<br>"+
                                            "search(/locate/) : "+text.search(/locate/);

// match()

let userName = "Disha Khunt isha Isha";
let match1 = userName.match('isha');
let match2 = userName.match(/isha/);
let match3 = userName.match(/isha/g);
let match4 = userName.match(/isha/gi);

document.getElementById("demo2").innerHTML = userName+"<br>"+
                                            "match the string 'isha' : "+match1.length+" "+ userName.match('isha')+"<br>"+
                                           " match the string /isha/ : "+match2.length+" "+ match2 +"<br>"+
                                           " match the string /isha/g : "+match3.length+" "+ match3+"<br>"+
                                           " match the string /isha/gi : "+match4.length+" "+ match4+"<br>";
// matchAll()
let matchAll1 = userName.matchAll('isha');
let matchAll2 = userName.matchAll(/isha/g);
let matchAll3 = userName.matchAll(/isha/gi);
document.getElementById("demo3").innerHTML = "Match all the 'isha' : "+Array.from(matchAll1) +"<br>"+
                                            "Match all the /isha/g : "+Array.from(matchAll2) +"<br>"+
                                            "Match all the /isha/gi : "+Array.from(matchAll3);

// includes()
let str = "Hello, welcome to javascript";

document.getElementById("demo4").innerHTML = str+"<br>"+
                                            "includes String 'welcome' : "+str.includes("welcome")+"<br>"+
                                            "including string 'Hello' Starting position is 8? "+str.includes("Hello",12);

//startWidth()
document.getElementById("demo5").innerHTML = "Start String 'Hello'? : "+str.startsWith("Hello")+"<br>"+
                                            "Start String 'welcome'? : "+str.startsWith("welcome")+"<br>"+
                                            "Start String 'welcome' is 7? : "+str.startsWith("welcome",7);

//endWith()
document.getElementById("demo6").innerHTML ="End String 'javascript'? : "+str.endsWith("javascript")+"<br>"+
                                            "End String 'welcome' is 10? : "+str.endsWith("welcome",10)+"<br>";

