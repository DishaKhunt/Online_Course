class Car{
    constructor(name){
        this.name = name;
    }
    static hello(){
        return "Hello Disha!!!!!";
    }
}
const myCar = new Car("Thar");

document.getElementById("demo1").innerHTML = Car.hello();


class Car2 {
    constructor(name) {
      this.name = name;
    }
    static hello(x) {
      return "Hello " + x.name;
    }
  }
  
  const myCar2 = new Car2("Thar");
  document.getElementById("demo2").innerHTML = Car2.hello(myCar2);