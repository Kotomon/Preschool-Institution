$(document).ready(function() {
    $('.btn-show-comment').click(function() {
        $(this).siblings('.card-comment').toggle();
        $(this).text(function(i, text) {
            return text === "Подробнее" ? "Скрыть" : "Подробнее";
        });
    });
});


