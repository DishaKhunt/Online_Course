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
    firstName:"Isha",
    lastName: "Tarpada"
  }

  const person3 = {
    fullName: function(city, country) {
        return this.firstName + " " + this.lastName + "," + city + "," + country;
      }
  }

  document.getElementById("demo1").innerHTML = person.fullName.call(person1) +"<br>"+
  person.fullName.call(person2) +"<br>"+
  person3.fullName.call(person1," Rajkot", "India"); 