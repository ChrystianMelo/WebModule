function verification(view){
  return document.getElementById(view).value === '';
}

function setError(){
  var text = "Input not valid!";
  var end = true;
  if (verification('message')){
    document.getElementById("msg_error").innerHTML = text;
    end = false;
  }
  if(verification('email')){
    document.getElementById("mail_error").innerHTML = text;
    end = false;
  }
  if(verification('name')){
    document.getElementById("name_error").innerHTML = text;
    end = false;
  }
  return end;
}

function cleanError(){
  document.getElementById("msg_error").innerHTML = "";
  document.getElementById("mail_error").innerHTML = "";
  document.getElementById("name_error").innerHTML = "";
}

function sendEmail() {
  var businessMail = "test@example.com";
  var msg = document.getElementById('message').value;
  var mail = document.getElementById('email').value;
  var name = document.getElementById('name').value;
  
  cleanError();

  if (setError()){
    var subject = "[Contact by web] - " + name + " have a message to you!";
    var body    = msg + "\n Contact me by "+ mail;
    window.location.href = "mailto:"+businessMail+"?subject="+subject+"&body="+body;
	}
}