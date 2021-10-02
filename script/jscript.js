function checkPassword() {
		if(document.getElementById("psw").value != document.getElementById("rpsw").value) {
			alert("Password Mismatch !");
			return false;
		}
	/*	else {
		alert("Registration successfully completed.");
			return true;
		}*/
}

function enableButton() {
	if(document.getElementById("ch").checked){
		document.getElementById("b1").disabled=false;
	}
	else {
		document.getElementById("b1").disabled=true;
	}
}


function myFunction1() {
  window.open("Services.html","_blank");
}

function myFunction2() {
  window.open("Aboutus.html","_blank");
}

function myFunction3() {
  window.open("viewapartments.html","_blank");
}

function myFunction4() {
  window.open("viewap5.html","_blank");
}


function myFunction5() {
  window.open("viewap4.html","_blank");
}


function myFunction6() {
  window.open("viewap6.html","_blank");
}

function myFunction7() {
  window.open("viewap.html","_blank");
}

