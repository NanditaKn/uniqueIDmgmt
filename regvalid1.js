function onlyAlpha(){
	var name = document.getElementById('name').value;
	var nexp = /^[a-zA-Z .]+$/;
	if(name != ""){
		name.focus();
		alert("Enter a valid name");
		return false;
	}
	else{
		if (name.match(nexp)) {
			return true;
		}
		else {
			name.focus();
			alert("Enter a valid name");
			return false;
		}
	}
}
function isSelect(){
	var val = document.getElementById('dept').value;
	if (val != "selected") {
		return true;
	}
	else {
		val.focus();
		alert("Please choose your department");
		return false;
	}
}
function isSelect1(){
	var val = document.getElementById('cname').value;
	if (val != "selected") {
		return true;
	}
	else {
		alert("Please choose your college");
		return false;
	}
}
function validateMail(){
	var val = document.getElementById('email').value;
	var rexp = /\S+@\S+\.\S+/;
	if (val.match(rexp)) {
		return true;
	}
	else {
		alert("Enter a valid mail id");
		return false;
	}
}
function validateContact(){
	var val = document.getElementById('cnt').value;
	var rexp = /^[0-9]{10}$/;
	if (val.match(rexp)) {
		return true;
	}
	else {
		alert("Please enter a 10 digit number");
		return false;
	}
}