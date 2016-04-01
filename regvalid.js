function formvalid(){
	var name = document.getElementById("name");
	var nexp = /^[a-zA-Z]+$/;
	if(name.value == ""){
		name.focus();
		alert("Enter a valid name");
		return false;
	}
	else{
		if (!name.value.match(nexp)) {
			name.focus();
			alert("Enter a valid name");
			return false;
		}
	}
	var dept = document.getElementById('dept');
	if (dept.value == "selected") {
		dept.focus();
		alert("Please choose your department");
		return false;
	}
	var year = document.getElementById('year');
	if (year.value == "selected") {
		year.focus();
		alert("Please choose your year of study");
		return false;
	}
	var clg = document.getElementById('cname');
	if (clg.value == "selected") {
		alert("Please choose your college");
		return false;
	}
	var mobile = document.getElementById('cnt');
	var mrexp = /^[0-9]{10}$/;
	if (!mobile.value.match(mrexp)) {
		alert("Please enter a 10 digit number");
		return false;
	}
}