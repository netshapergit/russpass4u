$(window).bind('scroll',function(e){
    parallaxScroll();
});

function parallaxScroll(){
    var scrolled = $(window).scrollTop();
    //$('#parallax-bg1').css('top',(0-(scrolled*.25))+'px');
    //$('#parallax-bg2').css('top',(0-(scrolled*.5))+'px');
    //$('.position-parallax_1').css('top',(0-(scrolled*.75))+'px');
	//$('.position-parallax_2').css('top',(0-(scrolled*1.90))+'px');
	//$('.position-parallax_2').css('right',(0-(scrolled*1.90))+'px');
	//$('.position-parallax_2').css('top',(0-(scrolled*.50))+'px');
	$('.position-parallax').css('top',(-200+(scrolled*.15))+'px');
}