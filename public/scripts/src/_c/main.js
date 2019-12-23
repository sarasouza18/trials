function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".indicator")
        .toggleClass('lnr-circle-minus lnr-plus-circle');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);

$(function() {
    $('.sub-nav a[href*="#"]:not([href="#"]), #navbar-menu a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});




