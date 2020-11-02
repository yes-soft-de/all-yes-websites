jQuery(document).ready( function( $ ) {
  var navBarDesktopHeight = $('.navbar-desktop').innerHeight();

  $('.services').find('.container').css('transform', 'translateY(' + (navBarDesktopHeight + 75) + 'px)');
  $('#primary').css('padding-top', (navBarDesktopHeight + 25) + 'px');

  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      // console.log(.css('background-color'));
      $('.navbar-desktop').css('background-color', 'rgb(0 12 44)');
    } else {
      $('.navbar-desktop').css('background-color', 'transparent');
    }
  });

  // Show Service Content When Hover
  $('.service-box').hover( function () {
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
          .find('.time-parent-box').addClass('col-6 col-md-4 text-right')
          .siblings('.category-parent-box').addClass('col-6 col-md-8')
          .find('.category-box').addClass('border-green-blue mb-2');
      } else {
        $(childId).addClass('col-6')
          .find('.time-parent-box').addClass('col-12 mt-2')
          .siblings('.category-parent-box').addClass('col-12')
          .find('.category-box').addClass('border-bing mb-2');
      }
    });




});
