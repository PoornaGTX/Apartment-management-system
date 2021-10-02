function loadData(name){
	if(name=="button1"){
		document.getElementById("img1").src="img/bedroom1.jpg";
		document.getElementById("img2").src="img/bedroom2.jpg";
		document.getElementById("pra").innerHTML="Bedroom -:Frame After the mattress ...Bedding. ...Lighting. ...Nightstands. ...Window treatments. ...Additional furniture.";
	}
	else if(name=="button2"){
		document.getElementById("img1").src="img/dining1.jpg";
		document.getElementById("img2").src="img/dining2.jpg";
		document.getElementById("pra").innerHTML="Dining area";
	}	
	else if(name=="button3"){
		document.getElementById("img1").src="img/bathroom1.jpg";
		document.getElementById("img2").src="img/bathroom2.jpg";
		document.getElementById("pra").innerHTML="Bathroom";	
	}
	else if(name=="button4"){
		document.getElementById("img1").src="img/living1.jpg";
		document.getElementById("img2").src="img/living2.jpg";
		document.getElementById("pra").innerHTML="Living room";
	}
	else if(name=="button5"){
		document.getElementById("img1").src="img/kitchen1.jpg";
		document.getElementById("img2").src="img/kitchen3.jpg";
		document.getElementById("pra").innerHTML="Kitchen";	
	}
	else
	{
		alert("Invalid");
	}		
}

