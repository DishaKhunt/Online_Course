// Array length
let fruits = ["Banana", "Orange", "Apple", "Mango"];
let size = fruits.length;
// Array toString()
let str = fruits.toString();

let fruit1 = fruits.at(2);
let fruit2 = fruits[1];

//array join() 
let join = fruits.join( " * " );

document.getElementById("demo1").innerHTML = "Array is : "+fruits+"<br>"+
                                            "Array length is : "+size+"<br>"+
                                            "<h4> Array toString()</h4>"+
                                            "String is : "+str+
                                            "<h4>at() Method</h4>"+
                                            "fruits.at(2) : "+fruit1+"<br>"+
                                            "fruits[1] : "+fruit2+"<br><br>"+
                                            "<h4>array join()</h4>"+
                                            "Array is join * : "+join;

// Popping and Pushing
// array pop()
let arr_pop = fruits.pop();
document.getElementById("demo2").innerHTML ="array is pop : "+arr_pop+"<br>"+
                                            "array is : "+fruits;
                                            
// array push()
let arr_push = fruits.push("kiwi");
document.getElementById("demo3").innerHTML ="array is push : "+arr_push+"<br>"+
                                                "array is : "+fruits;

// Shifting Elements
// array shift()
let arr_shift = fruits.shift();
document.getElementById("demo4").innerHTML = "array is shift : "+arr_shift+"<br>"+
                                            "array is : "+fruits;
    
// array unshift()
let arr_unshift = fruits.unshift("Mango");
document.getElementById("demo5").innerHTML = "Araay is unshift : "+arr_unshift+"<br>"+
                                            "Array is : "+fruits;

// .changing elements
fruits[0] = "Banana"
document.getElementById("demo6").innerHTML = "chnage the first index : "+fruits;

// without using push() method add the element
fruits[fruits.length] = "Mango";
document.getElementById("demo7").innerHTML = "Array is : "+fruits;

//Array delet()
let delet = delete fruits[0];
document.getElementById("demo8").innerHTML = "frist fruit is delete : "+delet+"<br>"+
                                            "frist fruit is : "+fruits[0]+"<br>"+
                                            "Array is : "+fruits;

//  Array concat()
let girls = ["Disha", "Isha","Manshi"];
let boys = ["Harsh","Miraj"];
let arr1 = ["Hemaxi", "Parth"];
let children = girls.concat(boys);
let childern1 = girls.concat(boys,arr1);

document.getElementById("demo9").innerHTML = "Merging the 2 Array is : "+children+"<br>"+
                                            "Merging the 3 Array is : "+childern1;

// Array copyWithin()
let cars = ["Thar", "BMW","Verna","Audi"];
let copy = cars.copyWithin(3,0);

document.getElementById("demo10").innerHTML = "copy cars is : "+copy;

// Array flat()
let array1 = [[1,2],[3,4],[5,6]];
let newArray1 = array1.flat();

document.getElementById("demo11").innerHTML = "falt the array is : "+newArray1;

// Array splic()

const fruit = ["Banana", "Orange", "Apple", "Mango"];
fruit.splice(2, 0, "Lemon", "Kiwi");
let removed = fruit.splice(2, 2, "Lemon", "Kiwi");
document.getElementById("demo12").innerHTML = 'fruit.splice(2, 0, "Lemon", "Kiwi") : '+ fruit+"<br>"+
                                                'removed item : '+removed;
const car = ["Thar", "BMW", "Verna","Audi"];

document.getElementById("demo13").innerHTML = car;
car.splice(0, 1);
document.getElementById("demo14").innerHTML = "removed element in array : "+car;

// toSpliced() Method
let month = ["jan", "feb", "mar", "apr"];
let spliced = month.toSpliced(0, 1);

document.getElementById("demo15").innerHTML = " month.toSpliced(0, 1) : "+spliced;

// slice() Method
let fruit_arr = ["Banana", "Orange", "Apple", "Mango","Lemon"];
let citrus = fruit_arr.slice(1);
let citrus1 = fruit_arr.slice(3);
let citrus2 = fruit_arr.slice(1,3);
let citrus3 = fruit_arr.slice(2);
document.getElementById("demo16").innerHTML = fruit_arr + "<br><br>" + 
                                            "slice(1) : "+citrus+"<br>"+
                                            "slice(3) : "+citrus1+"<br>"+
                                            "slice(1,3) : "+citrus2+"<br>"+
                                            "slice(2) : "+citrus3;
                                            


// tostring()
let string = fruit_arr.toString();
document.getElementById("demo17").innerHTML = string;