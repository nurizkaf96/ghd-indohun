// Disable autoplay
$('#myCarousel').carousel({
  interval: false,
  wrap: false
});

$('#myCarousel').on('slid.bs.carousel', '', function() {
  var $this = $(this);

  $this.children('.carousel-control').show();

  if($('.carousel-inner .item:first').hasClass('active')) {
    $this.children('.left.carousel-control').hide();
  } else if($('.carousel-inner .item:last').hasClass('active')) {
    $this.children('.right.carousel-control').hide();
  }

});