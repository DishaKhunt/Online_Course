class Car{
    constructor(brand){
        this.carName = brand;
    }
    present(){
        return 'I have a '+this.carName;
    }
}

class Model extends Car{
    constructor(brand, mod){
        super(brand);
        this.model = mod;
    }
    show(){
        return this.present() + ', it is a '+ this.model;
    }
}

const myCar = new Model("Ford" , "Mustang");

document.getElementById("demo1").innerHTML = myCar.show();

// Getters and Setters
class Car1{
    constructor(brand){
        this.carName = brand;
    }
    get cnm(){
        return this.carName;
    }
    set cnm(x){
        this.carName = x;
    }
}

const myCar1 = new Car1("Thar");

document.getElementById("demo2").innerHTML = myCar1.cnm;

class Car2{
    constructor(brand){
        this._carname = brand;
    }
    get carname() {
        return this._carname;
    }
    set carname(x){
        this._carname = x;
    }
}

const myCar2 = new Car2("BMW");
document.getElementById("demo3").innerHTML = myCar2.carname;

// cange carname
myCar2.carname = "Verna";
document.getElementById("demo4").innerHTML = myCar2.carname;

// Hoisting
//You cannot use the class yet.
//myCar = new Car("Ford") will raise an error.

class Car3 {
    constructor(brand) {
      this.carname = brand;
    }
  }
  
  //Now you can use the class:
  const myCar3 = new Car3("Ford");
  document.getElementById("demo5").innerHTML = myCar3.carname;