function generateCaptcha(){
    var alpha = new Array['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

    for(let i= 0; i<4 ; i++){
        let a = alpha[Math.floor(Math.random()* alpha.length)];
        let b = alpha[Math.floor(Math.random()* alpha.length)];
        let c = alpha[Math.floor(Math.random()* alpha.length)];
        let d = alpha[Math.floor(Math.random()* alpha.length)];
    }
    let code = a+ b  + c  + d;
    document.getElementById("inp1").value = code
}

const btn1 = document.getElementById("btn1");

btn1.addEventListener("click",function CheckValidCaptcha(){
    let string1 = (document.getElementById('inp1').value);
    let string2 = (document.getElementById('inp2').value);
    if (string1 == string2){
        Swal.fire({
            title: "Good job!",
            text: "Form is validated Successfully",
            icon: "success"
        });
    }
    else{    
        Swal.fire({
            title: "Oops!",
            text: "Please enter a valid captcha.",
            icon: "error"
        });   
    }
} );


