
import $ from 'jquery';

$('.memberImage').hover(
  function () {
    // código a ejecutarse cuando el apuntador pasa por encima
    $('.infoMember').removeClass('hide-xs')
    $('.memberImage').addClass('banner-figure')
  },
  function () {
    // código a ejecutarse cuando el apuntador sale del elemento
    $('.infoMember').addClass('hide-xs')
    $('.memberImage').removeClass('banner-figure')
  }
);
