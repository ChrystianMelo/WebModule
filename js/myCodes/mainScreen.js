function setError(view){
  var text = "Input not valid!";
  document.getElementById(view).innerHTML = text;
}
function cleanError(vieww){
  document.getElementById(vieww).innerHTML = "";
}
function compareByID(view1, view2){
  return document.getElementById(view1).value === document.getElementById(view2).value;
}
function verify(view){
  if(document.getElementById(view).value === null)
    return false;
  return !document.getElementById(view).value == '';
}

function sendEmail() {
  var businessMail = "test@example.com";
  var subject = "[Contact by web] - " + name + " have a message to you!";
  var body    = msg + "\n Contact me by "+ mail;
  var msg = document.getElementById('message').value;
  var mail = document.getElementById('email').value;
  var name = document.getElementById('name').value;
  
  cleanError('name_error');
  cleanError('msg_error');
  cleanError('mail_error');

  if(verify('message') && verify('email') && verify('name')){
    window.location.href = "mailto:"+businessMail+"?subject="+subject+"&body="+body;
	}else{
    if(!verify('message'))  setError('msg_error');
    if(!verify('email'))    setError('mail_error');
    if(!verify('name'))     setError('name_error');
  }
}

function signIn(){
  cleanError('name_error');
  cleanError('mail_error');
  cleanError('cpf_error');
  cleanError('nick_error');
  cleanError('pass_error');
  cleanError('cpass_error');

  if(!verify('name'))       setError('name_error');
  if(!verify('mail'))       setError('mail_error');
  if(!verify('cpf'))        setError('cpf_error');
  if(!verify('nick'))       setError('nick_error');
  if(!verify('pass'))       setError('pass_error');
  if(!verify('cpass'), !compareByID('pass', 'cpass')) 
                            setError('cpass_error');
}

function logIn(){

}


function changeDisplay(view1,view2){
  //var statev1 = document.getElementById(view1).style.visibility;
  //var statev2 = document.getElementById(view2).style.visibility;
  //if (statev1 === 'visible'){
    document.getElementById(view1).style.visibility = 'hidden';
    document.getElementById(view2).style.visibility = 'visible';
  /*}else{
    document.getElementById(view2).style.visibility = 'hidden';
    document.getElementById(view1).style.visibility = 'visible';
  }*/
}
