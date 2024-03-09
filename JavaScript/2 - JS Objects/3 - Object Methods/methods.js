// use this keyword

const person = {
    firstName: "Disha",
    lastName: "Khunt",
    fullName : function(){
        return this.firstName + " "+ this.lastName;
    }
}

document.getElementById("demo1").innerHTML = 
"Full Name : "+person.fullName();

person.name = function() {
    return (this.firstName + " " + this.lastName).toUpperCase();
  };
  
  document.getElementById("demo3").innerHTML =
  "My Name is " + person.name(); 
  