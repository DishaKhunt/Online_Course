onclick
function onClick(){
    document.getElementById('demo').style.height = '100px';
}


// onchange
function onChange(){
   let x = document.getElementById("choose").value;
   document.getElementById("change").innerHTML = "Select language : "+ x;
}

// onhover
function onOver(){
    document.getElementById("over").style.color = 'green';
}

// onkeypress
function onKeyPress(){
    document.getElementById("msg").innerHTML = " Hello.............. ";
}