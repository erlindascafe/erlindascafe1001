var sectionArray = [1, 2, 3]; // match the sections you have in your HTML

$(document).ready(function () {
    // Set default nav state
    $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');
    $('.navbar-nav .nav-item .nav-link').eq(0).addClass('active').removeClass('inactive');

    // Loop through each section
    $.each(sectionArray, function (index, value) {
        var $section = $('#section_' + value);

        // Skip if section doesn't exist
        if (!$section.length) return;

        // Click event
        $('.click-scroll').eq(index).on('click', function (e) {
            e.preventDefault();
            var offsetClick = $section.offset().top - 154;
            $('html, body').animate({
                scrollTop: offsetClick
            }, 300);
        });

        // Scroll event
        $(document).on('scroll', function () {
            if (!$section.length) return; // extra safeguard

            var offsetSection = $section.offset().top - 154;
            var docScroll = $(document).scrollTop();

            if (docScroll + 1 >= offsetSection) {
                $('.navbar-nav .nav-link').removeClass('active');
                $('.navbar-nav .nav-link:link').addClass('inactive');
                $('.navbar-nav .nav-item .nav-link').eq(index).addClass('active').removeClass('inactive');
            }
        });
    });
});
