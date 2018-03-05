
import $ from 'jquery';

accordionTabsFn()

$(window).bind('resize', function() {
	accordionTabsFn()
})

function accordionTabsFn() {
	if ($(window).innerWidth() < 943 ) {
		$('.accordionDisabled').removeClass('is-active')
		$('.accordionContent').css('display', 'none')
	}

	else {
		$('.accordionDisabled').addClass('is-active')
		$('.accordionContent').css('display', 'block')
	}
}