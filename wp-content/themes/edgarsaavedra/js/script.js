$(document).ready(function(){
	$('<br />').insertBefore('.srp-widget-stringbreak-link');
	var fLine =$('#footerbio').height();
	$('#footerbiotext, #footercontact').css({
		height : fLine/1.5+'px',
	})
});