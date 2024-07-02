document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide' , {
  type   : 'loop',
  perPage: 3,
  padding: '1rem',
  arrows:false,
  autoplay:true,
  breakpoints: {
    640: {
      perPage: 2,
    },
    480: {
      perPage: 1,
    },
  },
} );
    splide.mount();
  } );