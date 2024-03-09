// Using a Class
class Car{
    constructor(name,year){
        this.name = name;
        this.year = year;
    }
    age() {
        const date = new Date();
        return date.getFullYear() - this.year;
      }
}

const myCar1 = new Car("Thar", 2014);
const myCar2 = new Car("Verna", 2021);
document.getElementById("demo1").innerHTML = myCar1.name + " "+myCar2.name;

// Class Methods

const myCar = new Car("Ford", 2014);
document.getElementById("demo2").innerHTML =
"My car is " + myCar.age() + " years old.";
