$(document).ready(function() {
	//footerHeight();

});

$(window).resize(function() {
	//footerHeight();

});

function footerHeight(){
var footer = $('#footer'),
windowHeight = $(window).height(),
combinedHeight = footer.offset().top,
//height = (windowHeight > combinedHeight) ? windowHeight - footer.offset().top : 0;
// height = windowHeight - footer.offset().top;
height = windowHeight - combinedHeight -22;
footer.css({'height':height});
}