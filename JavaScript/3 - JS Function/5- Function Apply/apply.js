const person = {
    fullName: function() {
      return this.firstName + " " + this.lastName;
    }
}
  
const person1 = {
    firstName:"Disha",
    lastName: "Khunt"
}

const person2 = {
    fullName: function(city, country) {
      return this.firstName + " " + this.lastName + "," + city + "," + country;
    }
  }
  
  document.getElementById("demo1").innerHTML = 
  person.fullName.apply(person1) + "<br>"+
`person2.fullName.apply(person1, ["Rajkot" , "India"]) 🟰 ` + person2.fullName.apply(person1, ["Rajkot" , "India"]) + "<br>"+
`person2.fullName.call(person1,"Rajkot" , "India") 🟰 ` + person2.fullName.call(person1, "Rajkot" , "India"); 

// Simulate a Max Method on Arrays
document.getElementById("demo2").innerHTML = 
`Math.max(1,2,3) 🟰 `+Math.max(1,2,3) + "<br>"+
`Math.max.apply(null, [1,2,3]) 🟰 `+ Math.max.apply(null, [1,2,3]) +"<br>"+
`Math.max.apply(Math, [1,2,3]) 🟰 ` + Math.max.apply(Math, [1,2,3]) +"<br>"+
`Math.max.apply(" ", [1,2,3]) 🟰  ` +Math.max.apply(" ", [1,2,3])+ "<br>"+
`Math.max.apply(0, [1,2,3]) 🟰 `+ Math.max.apply(0, [1,2,3]);; 