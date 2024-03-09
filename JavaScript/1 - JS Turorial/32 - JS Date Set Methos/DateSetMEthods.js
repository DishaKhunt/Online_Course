// setFullYear() Method
const date = new Date();

date.setFullYear(2003);
document.getElementById("demo1").innerHTML = date;

date.setFullYear(2003, 1 , 5);
document.getElementById("demo2").innerHTML = date;

// setMonth() Method
date.setMonth(1);
document.getElementById("demo3").innerHTML = date;

// setDate() Method
date.setDate(5);
document.getElementById("demo4").innerHTML = date;

//setHours() Method
date.setHours(22);
document.getElementById("demo5").innerHTML = date;

// setMinutes() Method
date.setMinutes(30);
document.getElementById("demo6").innerHTML = date;

//  setSeconds() Method
date.setSeconds(45);
document.getElementById("demo7").innerHTML = date;

// Compare Dates
let text;
const today = new Date();
const someday = new Date();
someday.setFullYear(2100, 0, 14);

if (someday > today) {
  text = "Today is before January 14, 2100.";
} else {
  text = "Today is after January 14, 2100.";
}

document.getElementById("demo8").innerHTML = text;