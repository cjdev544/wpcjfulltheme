export const slider = () => {
    jQuery(document).ready( $ => {
        $('.TestimonialsList').bxSlider({
            auto: true,
            mode: 'fade',
            controls: false
        });
      });   
}