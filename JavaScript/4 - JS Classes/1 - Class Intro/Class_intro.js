class Car{
    constructor(name, year){
        this.name = name;
        this.year = year;
    }
    age(){
        // date = new Date();  // This will not work
        const date = new Date();
        return date.getFullYear() - this.year;
    }
}

const myCar1 = new Car("Thar",2020);
const myCar2 = new Car("Verna",2021);

document.getElementById("demo1").innerHTML = myCar1.name + " "+ myCar2.name;

// Class Methods
document.getElementById("demo2").innerHTML = "My Car is "+myCar1.age() +
" years old.";

// send parameters to Class methods
class Car1{
    constructor(name,year){
        this.name = name;
        this.year = year;
    }
    age(x){
        return x - this.year;
    }
}

const date = new Date();
let year = date.getFullYear();

const myCar3 = new Car1("BMW",2020);
document.getElementById("demo3").innerHTML = "My car is "+ myCar3.age(year)+ " years old.";

// "use strict"