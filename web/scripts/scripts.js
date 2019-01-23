function onPageLoad() {
	$("#pOne").fadeIn(5000);
	$("#pTwo").delay(1000).fadeIn(5000);
	$("#pThree").delay(2000).fadeIn(5000);
}
	
$(document).ready(onPageLoad);

// ta02.js
function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var textbox_id = "txtColor";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;

}