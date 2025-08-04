
// Set dimensions 
var headerH = $('header').height();
var winH = $(window).height();
var winW = $(window).width();


$(function() {

    // Adjust layout container margin on load
    $('#layout').css( 'margin-top', headerH+'px' );

});


$(window).resize(function(){
	headerH = $('header').height();
    winH = $(window).height();
    winW = $(window).width();

})
