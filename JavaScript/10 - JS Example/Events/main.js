
const btn = document.getElementById("btn");
const inp = document.getElementById("inp");

inp.addEventListener("keypress", function(){
    btn.disabled = false;
});

btn.addEventListener("click",function(){
    if(inp.value % 2 == 0){
        Swal.fire({
            title: "Good job!",
            text: "This number is Even Number",
            icon: "success"
        });
    }
    else{
        Swal.fire({
            title: "Oops!",
            text: "This number is odd number.",
            icon: "error"
        });
    }
});