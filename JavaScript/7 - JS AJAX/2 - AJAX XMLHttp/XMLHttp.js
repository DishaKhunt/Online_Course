
/*
    readyState	Holds the status of the XMLHttpRequest.
        0: request not initialized
        1: server connection established
        2: request received
        3: processing request
        4: request finished and response is ready
 */

/*
    status	200: "OK"
            403: "Forbidden"
            404: "Page not found"
            For a complete list go to the Http Messages Reference
 */

/*
    statusText	Returns the status-text (e.g. "OK" or "Not Found")
*/
function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo1").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "../1 - AJAX Intro/ajax_info.html");
    xhttp.send();
}