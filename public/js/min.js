$( document ).ready(function() {
    elementAttr();
});

function elementAttr() {
	$("input").attr('autocomplete', 'off');
}

function errorDisplay() {
	$("div").append($("<div>").attr('id', 'errorDiv')
	.append('HOLA'));

	createError();

	setTimeout(function() {
		$("div[id='errorDiv']").remove();
	}, 5000);
}

function createError() {
	$("<img>").attr("src","svg/error.jpg");
}