// ISO date
const date1 = new Date("2003-02-05");
// (Year and Month)
const date2 = new Date("2003-02");
// Only Year
const date3 = new Date("2003");
// Date-Time
const date4 = new Date("2015-03-25T12:00:00Z");

const date5 = new Date("2015-03-25T12:00:00-06:30");
document.getElementById("demo1").innerHTML = "2003-02-05 = "+date1+ "<br>"+
                                            "2003-02 = "+date2+"<br>"+
                                            "2003 = "+date3+"<br>"+
                                            "2015-03-25T12:00:00Z = "+date4+"<br>"+
                                            "2015-03-25T12:00:00-06:30 = "+date5;

//MM/DD/YYYY
const date6 = new Date("02/05/2003");
const date7 = new Date("feb 5 2003");
const date8 = new Date("5 feb 2003");

document.getElementById("demo2").innerHTML = "2/5/2003 ="+date6+"<br>"+
                                            "feb 5 2003 = "+date7+"<br>"+
                                            "5 feb 2003 = "+date8;


//Date Input - Parsing Dates
const msec = Date.parse("March 21, 2012");
document.getElementById("demo3").innerHTML = msec;


let msec1 = Date.parse("March 21, 2012");
const date = new Date(msec);
document.getElementById("demo4").innerHTML = date;