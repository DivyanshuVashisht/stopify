//run this when the page is ready and everything is loaded
//console.log("document is ready")
$(document).ready(function() {
	$("#hideLogin").click(function() {
		$("#loginForm").hide();
		$("#registerForm").show();
	});

	$("#hideRegister").click(function() {
		$("#loginForm").show();
		$("#registerForm").hide();
	});
});