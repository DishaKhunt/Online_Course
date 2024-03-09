const person = {
    firstName:"John",
    lastName: "Doe",
    fullName: function() {
      return this.firstName + " " + this.lastName;
    }
  }
  
  const member = {
    firstName:"Disha",
    lastName: "Khunt",
  }
  
  let fullName = person.fullName.bind(member);
  
document.getElementById("demo1").innerHTML = 
  `person.fullName.bind(member) 🟰 `+fullName();

const person1 = {
    firstName:"Disha",
    lastName: "Khunt",
    display: function() {
      let x = document.getElementById("demo2");
      x.innerHTML = this.firstName + " " + this.lastName;
    }
}

// person1.display();
setTimeout(person1.display, 3000);

// let display = person1.display.bind(person1);
// setTimeout(display, 3000);