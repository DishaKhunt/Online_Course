let text = '{"employees":[' +
'{"firstName":"Disha","lastName":"Khunt" },' +
'{"firstName":"Manshi","lastName":"Khunt" },' +
'{"firstName":"Isha","lastName":"Tarpada" }]}';

const obj = JSON.parse(text);
document.getElementById("demo1").innerHTML =
obj.employees[1].firstName + " " + obj.employees[1].lastName;