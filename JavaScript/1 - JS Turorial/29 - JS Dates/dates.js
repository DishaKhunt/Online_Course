// new 4()

const date = new Date();
document.getElementById("demo1").innerHTML = date;

// new Date(date string)
const date1 = new Date("2022-03-25");
document.getElementById("demo2").innerHTML = date1;

const date2 = new Date("February 5, 2003 11:10:00");
document.getElementById("demo3").innerHTML = date2;

// new Date(year, month, ...)
const date3 = new Date(2003, 1 , 5, 11, 13 ,30 ,0);

// Specifying a month higher than 11, will not result in an error but add the overflow to the next year
const date4 = new Date(2023, 15, 24, 10, 33, 30, 0);

// Specifying a day higher than max, will not result in an error but add the overflow to the next month
const date5 = new Date(2022, 5, 35, 10, 33, 30, 0);
document.getElementById("demo4").innerHTML = date3 +"<br>"+
                                            date4+"<br>"+
                                            date5;


// Using 6, 4, 3, or 2 Numbers

// 6 numbers specify year, month, day, hour, minute and second
const date7 = new Date(2022, 11, 24, 10, 33, 30);

// 5 numbers specify year, month, day, hour, and minute
const date8 = new Date(2022, 11, 24, 10, 33);

// 4 numbers specify year, month, day, and hour
const date9 = new Date(2022, 11, 24, 10);

// 3 numbers specify year, month, and day
const date10 = new Date(2022, 11, 24);

// 2 numbers specify year and month
const date11 = new Date(2022, 11);


const date12 = new Date(2024);
document.getElementById("demo5").innerHTML = date7 +"<br>"+
                                            date8 + "<br>"+
                                            date9 + "<br>"+
                                            date10 + "<br>"+
                                            date11 + "<br>"+
                                            date12;

//Previous Century
const date13 = new Date(99, 11, 24);
const date14 = new Date(9, 11, 24);
document.getElementById("demo6").innerHTML = date13+"<br>"+
                                            date14;

//new Date(milliseconds)
const date15 = new Date(100000000000);
const date16 = new Date(-100000000000);
const date17 = new Date(86400000);
const date18 = new Date(0);
document.getElementById("demo7").innerHTML = date15+"<br>"+
                                            date16+"<br>"+
                                            date17+"<br>"+
                                            date18;

//toString() method
document.getElementById("demo8").innerHTML = date.toString();
// toDateString() method
document.getElementById("demo9").innerHTML = date.toDateString();
//toUTCString() method 
document.getElementById("demo10").innerHTML = date.toUTCString();
// toISOString() method
document.getElementById("demo11").innerHTML = date.toISOString();