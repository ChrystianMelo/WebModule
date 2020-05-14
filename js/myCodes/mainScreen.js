function changeVisibility(view) {
	if (document.getElementById(view).style.visibility == "hidden"){
		document.getElementById(view).style.visibility = "visible";
	}else{
		document.getElementById(view).style.visibility = "hidden"
	}
}

function sendEmail() {
	if (document.getElementById('messageEmail').value != "" , document.getElementById('nameEmail').value != ""){
		var subject = "[Contact by web] - " +document.getElementById('nameEmail').value+ " have a message to you!";
		var body = document.getElementById('messageEmail').value;
	    window.location.href = "mailto:test@example.com?subject="+subject+"&body="+body;
	}else{
		alert("Preencha os campos!");
	}
}

function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}