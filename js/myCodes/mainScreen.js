function changeVisibility(view) {
	if (document.getElementById(view).style.visibility == "hidden"){
		document.getElementById(view).style.visibility = "visible";
	}else{
		document.getElementById(view).style.visibility = "hidden"
	}
}

function changeNavBar(from, to){
	changeVisibility(from);
	changeVisibility(to);
	//window.alert(from + document.getElementById(from).style.visibility+"\n"+to+ document.getElementById(to).style.visibility);
}