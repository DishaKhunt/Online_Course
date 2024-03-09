// new Date() Constructor
const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

const days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

const date = new Date();
const date1 = new Date("2003-02-05");

document.getElementById("demo1").innerHTML = date+"<br>"+date1;

//  getFullYear() Method

document.getElementById("demo2").innerHTML = "Full Year : "+"<br>"+
                                                date1.getFullYear()+"<br>"+
                                                date.getFullYear();

// getMonth() Method
const month = date1.getMonth() + 1;
const month1 = date.getMonth() + 1;
let month2 = months[date1.getMonth()];
let month3 = months[date.getMonth()];
document.getElementById("demo3").innerHTML = "Month : "+"<br>"+month+
                                            "<br>"+month1+
                                            "<br>"+month2+
                                            "<br>"+month3;
                                        
//  getDate() Method

document.getElementById("demo4").innerHTML = "Date : "+"<br>"+
                                            date1.getDate()+
                                            "<br>"+date.getDate();
        
// getHours() Method
const hour1 = date1.getHours();
const hour2 = date.getHours();

document.getElementById("demo5").innerHTML = "Hours : "+"<br>"+
                                            hour1+"<br>"+hour2;

// getMinutes() Method
const minutes1 = date1.getMinutes();
const minutes2 = date.getMinutes();

document.getElementById("demo6").innerHTML = "Minutes : "+"<br>"+
                                           minutes1+"<br>"+minutes2;


// getSeconds() Method
const seconds1 = date1.getSeconds();
const seconds2 = date.getSeconds();

document.getElementById("demo7").innerHTML = "Seconds : "+"<br>"+
                                           seconds1+"<br>"+seconds2;


// getMilliseconds() Method

const milliSeconds1 = date1.getMilliseconds();
const milliSeconds2 = date.getMilliseconds();

document.getElementById("demo8").innerHTML = "Seconds : "+"<br>"+
                                           milliSeconds1+"<br>"+milliSeconds2;

// getDay() Method
const day1 = date1.getDay();
const day2 = date.getDay();
const day3 = days[date1.getDay()];
const day4 = days[date.getDay()];

document.getElementById("demo9").innerHTML = "Seconds : "+"<br>"+
                                           day1+"<br>"+
                                           day2+"<br>"+
                                           day3+"<br>"+
                                           day4;

// getTime() Method
const time1 = date1.getTime();
const time2 = date.getTime();

document.getElementById("demo10").innerHTML = "Time : "+"<br>"+
                                                time1+"<br>"+
                                                time2;

// Date.now() Method
const date_now = Date.now();
document.getElementById("demo11").innerHTML = date_now;

// calculate the milllisecond in a year
const minute = 1000 * 60;
const hour = minute * 60;
const day = hour * 24;
const year = day * 365;

let years = Math.round(Date.now()/year);
document.getElementById("demo12").innerHTML = "Year : "+years;

// getTimezoneOffset() Method
const time_zone_offset = date.getTimezoneOffset();
document.getElementById("demo13").innerHTML = time_zone_offset; 

// getUTCDate() Method
document.getElementById("demo14").innerHTML = "Date : "+"<br>"+
                                            date1.getUTCDate()+
                                            "<br>"+date.getUTCDate();

// getUTCFullYear() Method
document.getElementById("demo15").innerHTML = "Full Year : "+"<br>"+
                                                date1.getUTCFullYear()+"<br>"+
                                                date.getUTCFullYear();

                                                
// getUTCMonth() Method
const month4 = date1.getUTCMonth() + 1;
const month5 = date.getUTCMonth() + 1;
let month6 = months[date1.getUTCMonth()];
let month7 = months[date.getUTCMonth()];
document.getElementById("demo16").innerHTML = "Month : "+"<br>"+month4+
                                            "<br>"+month5+
                                            "<br>"+month6+
                                            "<br>"+month7;

// getUTCDay()  Method
const day5 = date1.getUTCDay();
const day6 = date.getUTCDay();
const day7 = days[date1.getUTCDay()];
const day8 = days[date.getUTCDay()];

document.getElementById("demo17").innerHTML = "Seconds : "+"<br>"+
                                           day5+"<br>"+
                                           day6+"<br>"+
                                           day7+"<br>"+
                                           day8;


// getUTCHours() Method
const hour3 = date1.getUTCHours();
const hour4 = date.getUTCHours();

document.getElementById("demo18").innerHTML = "Hours : "+"<br>"+
                                            hour3+"<br>"+hour4;


// getUTCMinutes() Method
const minutes3 = date1.getUTCMinutes();
const minutes4 = date.getUTCMinutes();

document.getElementById("demo19").innerHTML = "Minutes : "+"<br>"+
                                           minutes3+"<br>"+minutes4;

// getUTCSeconds() Method
const seconds3 = date1.getUTCSeconds();
const seconds4 = date.getUTCSeconds();

document.getElementById("demo20").innerHTML = "Seconds : "+"<br>"+
                                           seconds1+"<br>"+seconds4;

// getUTCMilliseconds() Method
const milliSeconds3 = date1.getUTCMilliseconds();
const milliSeconds4 = date.getUTCMilliseconds();

document.getElementById("demo21").innerHTML = "Seconds : "+"<br>"+
                                           milliSeconds3+"<br>"+milliSeconds4;