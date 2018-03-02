
	import $ from 'jquery'
	import slick from 'slick-carousel'


	let maxWidth = 960
	let	slickVar = {
		arrows: false,
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: maxWidth,
        settings: 'unslick'
      }
    ]
  }

  function runSlick() {
    $('.projectCarousel').slick(slickVar);
  };

  runSlick();

  $(window).on('resize', function(){
    var width = $( window ).width();
    if(width < maxWidth) {
      runSlick();
    }
  });