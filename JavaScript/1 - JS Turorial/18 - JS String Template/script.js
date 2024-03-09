let drink = "Soft Drink";
let drinkName = ["Coca Cola","ThumpUp","Fanta", "Pepsi", "Sprite"];

let title = `<h2>${drink}</h2><ul>`;

for(const x of drinkName){
    title +=`<li>${x}</li>`
}
title += `</ul>`;

document.getElementById("demo").innerHTML = title;

let item = 5;
let price = 20;

let total = `${(item)}`;
alert("total item is "+item);