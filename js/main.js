(function ($) {
    "use strict";
    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    // Initiate the wowjs
    new WOW().init();
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });
    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });
    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })
    
    // Newsletter subscription
    $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();
        
        var email = $('#newsletterEmail').val();
        var submitBtn = $('#newsletterSubmit');
        var originalText = submitBtn.text();
        
        // Basic validation
        if (!email || !email.includes('@')) {
            Swal.fire({
                icon: 'error',
                title: 'Ungültige E-Mail',
                text: 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#0d6efd'
            });
            return;
        }
        
        // Show loading state
        submitBtn.text('Wird gesendet...').prop('disabled', true);
        
        $.ajax({
            url: 'newsletter_subscribe.php',
            type: 'POST',
            data: {
                email: email
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Erfolgreich angemeldet!',
                        text: response.message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#0d6efd'
                    });
                    $('#newsletterEmail').val('');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Fehler',
                        text: response.message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Fehler',
                    text: 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#0d6efd'
                });
            },
            complete: function() {
                submitBtn.text(originalText).prop('disabled', false);
            }
        });
    });
    
    // Homepage contact form
    $('#homepageContactForm').on('submit', function(e) {
        e.preventDefault();
        
        var submitBtn = $('#homepageSubmitBtn');
        var originalText = submitBtn.html();
        
        // Show loading state
        submitBtn.html('Wird gesendet...').prop('disabled', true);
        
        $.ajax({
            url: 'send_email.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Erfolgreich gesendet!',
                        text: response.message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#0d6efd'
                    });
                    $('#homepageContactForm')[0].reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Fehler',
                        text: response.message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Fehler',
                    text: 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#0d6efd'
                });
            },
            complete: function() {
                submitBtn.html(originalText).prop('disabled', false);
            }
        });
    });
})(jQuery);
