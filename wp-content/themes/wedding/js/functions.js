jQuery(document).ready($ => {

    setDaysLeft();


    $('.menu-item').click((e) => {
        $('.menu-item').removeClass('active');
        $('#' + e.target.id).addClass('active');
        scrollToId(e.target.id.split('menu-')[1]);
    });

    const adminBar = $('#wpadminbar');
    if (adminBar) {
        $('.header-container').css('top', adminBar.height());
    }


    function scrollToId(id) {
        console.log('ID: ' + id);
        $('html, body').animate({
            scrollTop: $('#' + id).offset().top
        }, 2000, 'swing', () => window.location.href = '#' + id);
    }




    function setDaysLeft() {
        let daysLeft = $('#days-left');
        let text =  daysLeft.text().replace(/\s/g, '');
        let ms = new Date(text).getTime() - new Date().getTime();
        let days = Math.round((((ms / 1000) / 60) / 60) / 24);
       // let days = ms;
        daysLeft.text(days);
    }
    
});