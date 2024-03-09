// Creating an Object from a JSON String

const txt = '{"name":"Disha", "age":"21", "city":"Rajkot"}'
const obj = JSON.parse(txt);
document.getElementById("demo1").innerHTML = obj.name+ " , "+obj.age;

// Array as JSON
const text = '["Thar", "Verna", "BMW" ]';

const myArr = JSON.parse(text);
document.getElementById("demo2").innerHTML = myArr[0];

// Convert a string into a date object.
const str = '{"name":"Disha", "birth":"2003-2-5", "city":"Rajkot"}';
const obj1 = JSON.parse(str);
obj1.birth = new Date(obj1.birth);
document.getElementById("demo3").innerHTML = obj1.name + " , "+obj1.birth;

const obj2 = JSON.parse(str, function(key, value){
     if(key == "birth"){
        return new Date(value);
     }
     else{
        return value;
     }
});
document.getElementById("demo4").innerHTML = obj2.birth;

// Convert a string into a function.
const str1 = '{"name":"Disha", "age":"function() {return 21;}", "city":"Rajkot"}';

const obj3 = JSON.parse(str1);
obj3.age = eval("("+obj3.age+")");
document.getElementById("demo5").innerHTML = obj3.name + " , "+obj3.age();