jQuery(document).ready( function( $ ) {

  var navBarDesktopHeight = $('.navbar-desktop').innerHeight(),
      navBarMobileHeight = $('.navbar-mobile').innerHeight(),
      firstNewsLetterInputHeight = $('.first-side .widget-content input[type="email"]').outerHeight(),
      secondNewsLetterInputHeight = $('.second-side .widget-content input[type="email"]').outerHeight();

  // Desktop and mobile styles
  if ($(window).outerWidth() >= '768') {
    $('.services').find('.container').css('transform', 'translateY(' + (navBarDesktopHeight + 75) + 'px)');
    $('#primary').css('padding-top', (navBarDesktopHeight + 50) + 'px');
    $('.first-side .widget-content input[type="submit"]').css('height', firstNewsLetterInputHeight + 'px');
  } else {
    $('.services').find('.container').css('transform', 'translateY(' + (navBarMobileHeight + 40) + 'px)');
    $('#primary').css('padding-top', (navBarMobileHeight + 25) + 'px');
    $('.second-side .widget-content input[type="submit"]').css('height', secondNewsLetterInputHeight + 'px');
  }

  $('.our-work .service-box').hover( function () {
    $(this).css('background', $(this).css('border-color') ).find('a').css('color', '#fff');
  }, function () {
    $(this).css('background', 'transparent').find('a').css('color', '#000');;
  });

  // console.log($('.our-projects .project-content'));
  $('.our-projects .project-content').map(function (e, k) {
    var childId = '#' + k.getAttribute('id');
    if (e == 0) {
      $(childId).find('.first_image').addClass('d-none');
      $(childId).find('.arrow_image').removeClass('px-0 text-center');
      $(childId).find('.second_image').removeClass('d-none');
    } else {
      $(childId).find('.first_image').removeClass('d-none');
      // $(childId).find('.arrow_image').removeClass('px-0 text-center');
      $(childId).find('.second_image').addClass('d-none');
    }

  });
  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 80) {
  //     $('.navbar-desktop').css('background-color', 'rgb(0 12 44)');
  //   } else {
  //     $('.navbar-desktop').css('background-color', 'transparent');
  //   }
  // });


  // Show Service Content When Hover
  $('.service-slide-box').hover( function () {
    $(this).find('h4').slideUp();
    $(this).find('p').slideDown();
  }, function () {
    $(this).find('h4').slideDown();
    $(this).find('p').slideUp();
  });


  /* Contact From Submission */
  $('#yesUserContactForm').on('submit', function (e) {
    // Prevent Form Submit Default
    e.preventDefault();

    $('.has-error').removeClass('has-error');
    $('.js-show-feedback').removeClass('js-show-feedback');

    var form    = $(this),
      name    = form.find('#name').val(),
      email   = form.find('#email').val(),
      message = form.find('#message').val(),
      ajaxurl = form.data('url');

    // Check In Javascript Also To Prevent The Progress If The Fields Is Empty
    if( name === '' ) {
      form.find('#name').parent('.footer-input').addClass('has-error');
      return;
    }

    if( email === '' ) {
      $('#email').parent('.footer-input').addClass('has-error');
      return;
    }

    if( message === '' ) {
      $('#message').parent('.footer-input').addClass('has-error');
      return;
    }

    form.find('input, button, textarea').attr('disabled','disabled');
    $('.js-form-submission').addClass('js-show-feedback');

    // Ajax Function
    $.ajax({
      url : ajaxurl,
      type : 'post',
      data : {
        name : name,
        email : email,
        message : message,
        action: 'yes_user_save_user_contact_form'
      },
      error : function( response ) {
        $('.js-form-submission').removeClass('js-show-feedback');
        $('.js-form-error').addClass('js-show-feedback');
        form.find('input, button, textarea').removeAttr('disabled');
      },
      success : function( response ) {
        // if the response equal to zero that mean the request was not successfully done and not recording into database
        if( response == 0 ) {
          setTimeout(function(){
            $('.js-form-submission').removeClass('js-show-feedback');
            $('.js-form-error').addClass('js-show-feedback');
            form.find('input, button, textarea').removeAttr('disabled');
          },1500);
        } else {
          setTimeout(function() {
            $('.js-form-submission').removeClass('js-show-feedback');
            $('.js-form-success').addClass('js-show-feedback');
            form.find('input, button, textarea').removeAttr('disabled').val('');
          },1500);
        }
      } // success function
    }); // ajax
  }); // submit function


  // blog page add grid bootstrap classes
  $('#primary .blog-main .blog-posts .row').children().map(function (e, k) {
    var childId = '#' + k.getAttribute('id');
    if (e == 0) {
      $(childId).addClass('col-12')
        .find('.time-parent-box').addClass('col-6 col-md-5 col-lg-4 text-right')
        .siblings('.category-parent-box').addClass('col-6 col-md-7 col-lg-8')
        .find('.category-box').addClass('border-green-blue mb-2');
    } else {
      $(childId).addClass('col-6')
        .find('.time-parent-box').addClass('col-12 mt-lg-2')
        .siblings('.category-parent-box').addClass('col-12')
        .find('.category-box').addClass('border-bing mb-2');
    }
  });


  // Slick In Our Work Page
  $('.our-work-filter-slick').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });


  // Typed In Landing Page
  var typed3 = new Typed('#typed', {
    stringsElement: '#typed-header-strings',
    // strings: ['Say Yes To: ...', 'Say Yes To: Creative', 'Say Yes To: Magnate', '', 'Say Yes To: Yes User'],
    typeSpeed: 50,
    backSpeed: 50,
    smartBackspace: true, // this is a default
    loop: true
  });




});
