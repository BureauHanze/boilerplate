<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/swiper.min.js"></script>
<script>
const swiperGallery = new Swiper('.swiper-gallery', {
    direction: 'horizontal',
    loop: false,
    preloadImages: false,
    lazy: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    grabCursor: true,
    spaceBetween: 32,
    breakpoints: {
        576: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});
</script>