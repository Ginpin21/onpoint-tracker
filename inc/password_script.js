var state = false;
function toggle() {
	if (state) {
		document.getElementById("password").setAttribute("type", "password");
		document.getElementById("eye").style.color = '#7a797e';
		state = false;
	}
	else {
		document.getElementById("password").setAttribute("type", "text");
		document.getElementById("eye").style.color = 'black';
		state = true;
	}
}

var state = false;
function toggle2() {
	if (state) {
		document.getElementById("confmpass").setAttribute("type", "password");
		document.getElementById("eye2").style.color = '#7a797e';
		state = false;
	}
	else {
		document.getElementById("confmpass").setAttribute("type", "text");
		document.getElementById("eye2").style.color = 'black';
		state = true;
	}
}
