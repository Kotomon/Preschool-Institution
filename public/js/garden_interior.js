$(document).ready(function () {

    // Show default tab on page load
    $('.tab-content #all').fadeIn();

    // Switch tabs
    $('.tab-links a').on('click', function (e) {
        var currentAttrValue = $(this).attr('href');

        // Show/Hide Tabs
        $('.tab-content ' + currentAttrValue).fadeIn().siblings().hide();

        // Change/remove current tab active class
        $(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });

    // Open lightbox on image click
    $('.gallery-item img').on('click', function (e) {
        var imgSrc = $(this).attr('src');
        $('#lightbox img').attr('src', imgSrc);
        $('#lightbox').fadeIn();
        e.stopPropagation();
    });

    // Close lightbox on close button click
    $('#lightbox .close').on('click', function (e) {
        $('#lightbox').fadeOut();
    });

    // Close lightbox on any click on the page
    $(document).on('click', function (e) {
        $('#lightbox').fadeOut();
    });
});
