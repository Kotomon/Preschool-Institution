$(document).ready(function () {
    let nav = $('#NavHeader');
    let navOffset = nav.offset().top;

    $(window).scroll(function () {
        let scrolled = $(window).scrollTop();

        if (scrolled > navOffset) {
            nav.addClass('sticky');
        } else {
            nav.removeClass('sticky');
        }
    });
});
$(document).ready(function () {
    let navButton = $('#burger-checkbox');
    let navPanel = $('#navPanel');

    navButton.click(function () {
        navPanel.toggle();
    });
});
const checkbox = document.getElementById('burger-checkbox');














