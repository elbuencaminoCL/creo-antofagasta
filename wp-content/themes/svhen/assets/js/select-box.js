
import $ from 'jquery';

/*$('.selectAll').on( 'click', (e) => {
	$('.selectOthers').toggleClass('hide-xs')
});

$(window).resize(function() {
  if ($(window).width() < 960) {
		$('.selectOthers').addClass('hide-xs')
  }
 else {
		$('.selectOthers').removeClass('hide-xs')
 }
});*/


$('.selectbox__selected').click(function() {
  $('.selectbox__values').toggle();
});

$('.selectbox__item').click(function() {
  var value = $(this).text();

  $('.selectbox__selected').attr('data-value', value);
  $('.selectbox__selected').html(value);

  $('.selectbox__values').toggle();
});