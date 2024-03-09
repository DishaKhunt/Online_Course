const person = {
    firstName: "Disha",
    lastName: "Khunt",
    language: "EN" 
  };


// Change a property
Object.defineProperty(person, "language", {value:"NO"});
// Listing All Properties
Object.defineProperty(person, "language", {enumerable:false});

// Adding a Property
Object.defineProperty(person, "year", {value:"2008"});

// Adding Getters and Setters
Object.defineProperty(person, "fullName", {
    get: function () {return this.firstName + " " + this.lastName;}
  });

document.getElementById("demo1").innerHTML = 
`Object.defineProperty(person, "language", {value:"NO"}) 🟰 `+person.language + "<br>"+
`Object.getOwnPropertyNames(person) 🟰 `+Object.getOwnPropertyNames(person) + "<br>"+
`Object.keys(person) 🟰 `+Object.keys(person) + "<br>"+
`Object.defineProperty(person, "year", {value:"2008"}) 🟰 ` + person.year +"<br>"+
`Full name 🟰  `+person.fullName;