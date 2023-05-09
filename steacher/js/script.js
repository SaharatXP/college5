$(document).ready( function() {
    $('.sidenav-right-open').on('click', function() {
        $('#sidenav-right').addClass('open');
    });

    $('.sidenav-right-close').on('click', function() {
        $('#sidenav-right').removeClass('open');
    });
});