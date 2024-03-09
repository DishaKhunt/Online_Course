let car = {type:"BMW" , color:"black", model:"500"};
document.getElementById("demo1").innerHTML = "The Car type name is : "+car.type;

// Object defines Multiplae line
let person = {
    firstName:"Disha", 
    lastName:"Khunt",
    age:20,
    // Use this keyword
    fullName : function() {
        return this.firstName + " " + this.lastName;
    }
}
document.getElementById("demo2").innerHTML = "My name is "+person.firstName+" "+person.lastName+".";

// Accessing Object Properties
// objectName.propertyName
// objectName["propertyName"]
document.getElementById("demo3").innerHTML = "Disha is "+person["age"]+" year old.";

// Accessing Object Methods
// objectName.methodName()
document.getElementById("demo4").innerHTML = person.fullName();
// without ()
document.getElementById("demo5").innerHTML = person.fullName;

