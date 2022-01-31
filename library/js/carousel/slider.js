(function($) {
    class SlickCarousel{
        constructor() {
            this.initiateCarousel();
        }
        initiateCarousel() {
            console.log('hell');
            $(".posts-carousel").slick();
        }
    }
new SlickCarousel();
})(jQuery)