jQuery(document).ready($ => {

    $('.menu-item').click((e) => {
        $('.menu-item').removeClass('active');
        $('#' + e.target.id).addClass('active');
        scrollToId(e.target.id.split('menu-')[1]);
    });

    const adminBar = $('#wpadminbar');
    if (adminBar) {
        $('.header-container').css('top', adminBar.height());
    }

    //$('.body-container').css('margin-top', $('.header-container').height() + (adminBar ? adminBar.height() : 0));

    function scrollToId(id) {
        $('html, body').animate({
            scrollTop: $('#' + id).offset().top
        }, 2000, 'swing', () => window.location.href = '#' + id);
    }
});