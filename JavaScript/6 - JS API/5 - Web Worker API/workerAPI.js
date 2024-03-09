// Example
let w;

function startWorker(){
    
    // Create a Web Worker Object
    if(typeof(w) == "undefined"){
        w = new Worker("demo_worker.js");
    }
    w.onmessage = function(event){
        document.getElementById("demo1").innerHTML = event.data;
    };
}

function stopWorker(){

    // Terminate a Web Worker
    w.terminate();

    // Reuse the Web Worker
    w = undefined;
}