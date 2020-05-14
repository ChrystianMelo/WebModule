function changeVisibility(view) {
	if (document.getElementById(view).style.visibility == "hidden"){
		document.getElementById(view).style.visibility = "visible";
	}else{
		document.getElementById(view).style.visibility = "hidden"
	}
}