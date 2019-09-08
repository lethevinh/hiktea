$(document).ready(function() {
    $('.grid_item .image_popup').on('click', function() {
        $(this).find('.link_popup').magnificPopup('open');
    });
    $('.link_container_image').each(function() {
        $(this).magnificPopup({
            delegate: '.image_popup',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });
    $('.link_container_video').each(function() {
        $(this).magnificPopup({
            delegate: '.image_popup',
            type: 'iframe',
            disableOn: 700, 
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
});
