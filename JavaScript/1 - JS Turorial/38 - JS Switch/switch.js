let day;
switch (new Date().getDay()){
    case 0:
        day = "Sunday";
        break;
    case 1:
        day = "Monday";
        break;
    case 2:
        day = "Tuesday";
        break;
    case 3:
        day = "Wednesday";
        break;
    case 4:
        day = "Thursday";
        break;
    case 5:
        day = "Friday";
        break;
    case  6:
        day = "Saturday";
}
document.getElementById("demo1").innerHTML = "Today is "+ "<b>"+ day +"</b>";

// switch case use in weedked display
// let text;
// switch (new Date().getDay()) {
//   case 6:
//     text = "Today is Saturday";
//     break;
//   case 0:
//     text = "Today is Sunday";
//     break;
//   default:
//     text = "Looking forward to the Weekend";
// }
// document.getElementById("demo2").innerHTML = text;

// or

let text;
switch (new Date().getDay()) {
  default:
    text = "Looking forward to the Weekend";
    break;
  case 6:
    text = "Today is Saturday";
    break;
  case 0:
    text = "Today is Sunday";
}
document.getElementById("demo2").innerHTML = text;


// Common Code Blocks
let text1;
switch (new Date().getDay()) {
  case 4:
  case 5:
    text1 = "Soon it is Weekend";
    break;
  case 0:
  case 6:
    text1 = "It is Weekend";
    break;
  default:
    text1 = "Looking forward to the Weekend";
}
document.getElementById("demo3").innerHTML = text1;



let x = "0";

switch (x) {
  case 0:
    str = "Off";
    break;
  case 1:
    str = "On";
    break;
  default:
    str = "No value found";
}
document.getElementById("demo4").innerHTML = str;