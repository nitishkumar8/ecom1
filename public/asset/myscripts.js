function railingRequiredFn(){
var x = document.getElementById("railingDropdown").value;
if (x =='Yes'){
document.getElementById("railingLength").disabled = false;
document.getElementById("railingType").disabled = false;
}
else{
document.getElementById("railingLength").disabled = true;
document.getElementById("railingType").disabled = true;
}
}

function pipelineRequiredFn(){
var x = document.getElementById("pipelineDropdown").value;
if (x =='Yes'){
document.getElementById("pipelineType").disabled = false;
}
else{
document.getElementById("pipelineType").disabled = true;
}
}

function walkwayRequiredFn(){
var x = document.getElementById("walkwayDropdown").value;
if (x =='Yes'){
document.getElementById("walkwayType").disabled = false;
document.getElementById("walkwayLength").disabled = false;
}
else{
document.getElementById("walkwayType").disabled = true;
document.getElementById("walkwayLength").disabled = true;
}
}

function showForm1(){
	//alert ("hello");
	if(document.getElementById("addRow").style.display == "block")
	{
		document.getElementById("addRow").style.display ="none";
	}
	else
	document.getElementById("addRow").style.display ="block";
}

function validateForm(){
		var busBar = document.forms["addRow"]["busBar"].value;
		var panelWattage = document.forms["addRow"]["panelWattage"].value;
		var iecCertificate = document.forms["addRow"]["iecCertificate"].value;
		var panelDetails = document.forms["addRow"]["panelDetails"].value;
		var panelPrice = document.forms["addRow"]["panelPrice"].value;
			if (busBar == "") {
			alert("Kindly enter the number of bus bars of solar panels");
			return false;
			}
			if (Number.isInteger(busBar)) {
			alert("Kindly enter the integer value of bus bars of solar panels");
			return false;
			}
			
			if (panelWattage == "") {
			alert("Kindly enter the wattage of solar panels");
			return false;
			}
			//alert (panelWattage);
			if (panelWattage <=	0 || panelWattage >= 1000) {
			alert("Solar panel wattage should be in the range of 0 to 1000");
			return false;
			}
			
			
			if (iecCertificate == "") {
			alert("Kindly enter the IEC certification details  solar panels");
			return false;
			}
			//alert (iecCertificate.length);
			if(iecCertificate.length > 100){
				alert("Length of IEC certification should be less than 100 letters");
				return false;
			}
			
			
			if (panelDetails == "") {
			alert("Kindly enter the details of of solar panels");
			return false;
			}
			if(panelDetails.length > 200){
				alert("Length of panel details should be less than 100 letters");
				return false;
			}
			if (panelPrice == "") {
			alert("Kindly enter the price of solar panels");
			return false;
			}
			if (Number.isInteger(panelPrice)) {
			alert("Kindly enter the integer value of price of solar panels");
			return false;
			}
			if (panelPrice <=0 || panelPrice >= 100) {
			alert("Solar panel price should be in the range of 0 to 100");
			return false;
			}
	
}