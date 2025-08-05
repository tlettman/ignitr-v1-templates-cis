
// Set dimensions 
var headerH = $('header').height();
var winH = $(window).height();
var winW = $(window).width();

function calibrateElements() {
    // Adjust layout container margin on load
    $('#layout').css( 'margin-top', headerH+'px' );

    // Adjust hero height
    let heroH = winH - headerH;
    $('#hero').css( 'height', heroH+'px' );
}

$(function() {

    calibrateElements();

});


$(window).resize(function(){
	headerH = $('header').height();
    winH = $(window).height();
    winW = $(window).width();
    calibrateElements();
})
