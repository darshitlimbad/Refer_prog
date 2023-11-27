document.addEventListener('DOMContentLoaded' , function () {
	document.getElementById('copy').addEventListener('click' , function () {
		 // Get the text field
		var URL = document.getElementById("URL");
		var span_copy = document.getElementsByClassName("span_copy");
		
		// Copy the text inside the text field
		navigator.clipboard.writeText(URL.value);
		
		span_copy[0].innerHTML= "Copied to clipboard";
		
	});
})