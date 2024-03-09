// JavaScript Getter (The get Keyword)

const person = {
    firstName: "Disha",
    lastName: "Khunt",
    language: "english",
    get lang() {
      return this.language;
    }
  };
  
  // Display data from the object using a getter:
  document.getElementById("demo1").innerHTML = "Language : "+person.lang;

//   JavaScript Setter (The set Keyword)
const person1 = {
    firstName: "Disha",
    lastName: "Khunt",
    language: "",
    set lang(lang) {
      this.language = lang;
    }
};
  
// Set an object property using a setter:
  person1.lang = "en";
  
// Display data from the object:
  document.getElementById("demo2").innerHTML = person1.language;

  // Data Quality
  const person2 = {
    firstName: "Disha",
    lastName: "Khunt",
    language: "english",
    get lang() {
      return this.language.toUpperCase();
    }
  };
  
// Display data from the object using a getter:
  document.getElementById("demo3").innerHTML = person2.lang;

  const person3 = {
    firstName: "Disha",
    lastName: "Khunt",
    language: "",
    set lang(lang) {
      this.language = lang.toUpperCase();
    }
  };
  
// Set an object property using a setter:
  person3.lang = "en";
  
// Display data from the object:
  document.getElementById("demo4").innerHTML = person3.language;

// Object.defineProperty()

// Define an object
const obj = {counter : 0};

// Define Setters and Getters
Object.defineProperty(obj, "reset", {
  get : function () {
    this.counter = 0;
  }
});

Object.defineProperty(obj, "increment", {
  get : function () {
   this.counter++;
  }
});

Object.defineProperty(obj, "decrement", {
  get : function () {
    this.counter--;
  }
});

Object.defineProperty(obj, "add", {
  set : function (value) {
    this.counter += value;
  }
});

Object.defineProperty(obj, "subtraction", {
  set : function (value) {
    this.counter -= value;
  }
});

// play with counter:
obj.reset;
obj.add = 5;
obj.subtraction = 2;
obj.increment;
obj.decrement;
document.getElementById("demo5").innerHTML =obj.counter;