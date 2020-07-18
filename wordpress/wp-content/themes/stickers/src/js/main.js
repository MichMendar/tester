$(document).ready(function () {

    /**
     * Refresh sliders for resizes
     */
    $(window).resize(function(){
        $('.slick-slider')[0].slick.refresh();
    })

    /**
     * Testimonials slider
     */
    $('.testimonials__slides').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        responsive: []
    })

    var sidebar = new StickySidebar('.sidebar', {
        containerSelector: '.row',
        innerWrapperSelector: '.sidebar__form',
        topSpacing: 20,
        bottomSpacing: 20
    });

    /**
     * Sticker form
     */
    $('#sticker-form').submit(function (e) {
        e.preventDefault()

        var formFilled = false

        $('#sticker-form .input').each(function() {
            if ($(this).val() !== ' ')
            formFilled = true
        });

        if (formFilled) {
            var $counter = $('.counter').html()
            $counter = parseInt($counter)
    
            if ($('.sidebar__form-check').is(':checked')) {
                if ($counter > 0) {
                    $counter = parseInt($counter) - 1;
        
                    $('.counter').html($counter);

                    $submitButton = $('.sidebar__form-submit');

                    $('.sidebar__form-column').last().prepend(
                    '<div class="sidebar__form-succes"><h4>THANKS FOR YOUR ENERGY!</h4><h4>YOUR STICKERS ARE ON THEIR WAY!</h4></div>'
                    );

                    $submitButton.css('display', 'none');

                    $('#sticker-form .input').each(function() {
                        $(this).val('');
                    });
                    
                } else {
                    alert("There are no more free stickers.")
                }
            } else {
                alert("We need the checkbox field checked to know that you understand the Privacy Policy.")
            }
        } else {
            alert("Please fields could not be empty")
        }
    });

    /**
     * Sticker form mobile
     */
    $('#sticker-form-mobile').submit(function (e) {
        e.preventDefault()

        var formFilled = false

        $('#sticker-form-mobile .input').each(function() {
            if ($(this).val() !== ' ')
            formFilled = true
        });

        if (formFilled) {
            var $counter = $('.counter').html()
            $counter = parseInt($counter)
    
            if ($('#sticker-form-mobile .sidebar__form-check').is(':checked')) {
                if ($counter > 0) {
                    $counter = parseInt($counter) - 1;
        
                    $('.counter').html($counter);

                    $submitButton = $('#sticker-form-mobile .sidebar__form-submit');

                    $('#sticker-form-mobile .sidebar__form-column').last().prepend(
                    '<div class="sidebar__form-succes"><h4>THANKS FOR YOUR ENERGY!</h4><h4>YOUR STICKERS ARE ON THEIR WAY!</h4></div>'
                    );

                    $submitButton.css('display', 'none');

                    $('#sticker-form-mobile .input').each(function() {
                        $(this).val('');
                    });
                    
                } else {
                    alert("There are no more free stickers.")
                }
            } else {
                alert("We need the checkbox field checked to know that you understand the Privacy Policy.")
            }
        } else {
            alert("Please fields could not be empty")
        }
    });

})