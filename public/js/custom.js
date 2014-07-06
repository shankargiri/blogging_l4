$(document).ready(function () {
    $(".translate").hover(
        function () {
            $('ul.file_menu').stop().slideDown('medium');
        },
        function () {
            $('ul.file_menu').stop().slideUp('medium');
        }
    );

    $('#datepicker').datepicker();
});