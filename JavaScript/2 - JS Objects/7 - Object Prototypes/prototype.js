// Object Prototypes
function Person(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
    // this.nationality = "English"
}
// you can not add a new property to an existing object constructor
Person.nationality = "English";

const myFather = new Person("Sanjybhai", "Khunt", 50, "blue");
const myMother = new Person("Bhavanaben", "Khunt", 48, "brown");

document.getElementById("demo1").innerHTML =
"My father is " + myFather.age + ". My mother is " + myMother.age +"." + "<br>"+
"The nationality of my father is " + myFather.nationality;  

// Using the prototype Property
Person.prototype.nationality = "English";

Person.prototype.name = function() {
    return this.firstName + " " + this.lastName
  };

document.getElementById("demo2").innerHTML = 
"The nationality of my Mother is " + myMother.nationality + "<br>"+
"My Father name is "+myFather.name(); 