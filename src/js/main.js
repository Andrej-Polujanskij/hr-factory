(function($) {
  "use strict";
  $(document).on('ready', function() {

    //Canculator to show
    $('.calc-btn').click(function() {
      // $('.calculator').toggleClass('hidden');
      $('.wrapper-calc').fadeIn(300);
      $('.calculator').css('z-index', '11')
      $('.calc-btn').toggleClass('hidden');

      // if($( window ).width() <= 995){
      //   $('html').toggleClass('overflow-fidden');
      // }
    });

    $('.close-calculator').click(function() {
      // $('.calculator').toggleClass('hidden');
      $('.wrapper-calc').fadeOut(300)
      $('.calculator').css('z-index', '0')
      $('.calc-btn').toggleClass('hidden');

      // if($( window ).width() <= 995){
      //   $('html').toggleClass('overflow-fidden');
      // }
    });

    //Caculatror select
    $('.field').select2({
      placeholder: 'Pasirinkite sritį'
    });
    $('.position').select2({
      placeholder: 'Pasirinkite specialybę'
    });
    $('.experience').select2({
      placeholder: 'Jūsų darbo patirtis'
    });


    var calcValues = { sritis: '', position: '', experience: '' };

    $.each(sritys, function(index, value) {
      //First select
      $('.field').append($('<option/>', {
        value: value.pavadinimas,
        text: value.pavadinimas
      }));
    });


    $('.field').on('select2:select', function(e) {
      var fieldName = e.params.data.id
      calcValues.sritis = fieldName

      $('.position').find('option:not(:first)').remove();
      $('.salary').html('0 EUR');
      $('.position').val(null).trigger('change');
      $('.experience').val(null).trigger('change');
      calcValues.experience = ''

      $.each(sritys, function(index, value) {

        if (value.pavadinimas == calcValues.sritis) {
          //Second select
          $.each(value.spacialybes, function(index, value) {
            $('.position').append($('<option/>', {
              value: value.pavadinimas,
              text: value.pavadinimas
            }));
          });

        }

      });

    });

    $('.position').on('select2:select', function(e) {
      calcValues.position = e.params.data.id
    });
    $('.experience').on('select2:select', function(e) {
      calcValues.experience = e.params.data.id
    });

    //Select submit
    $('.calc-submit').click(function() {
      if (calcValues.experience !== '' && calcValues.position !== '' && calcValues.sritis !== '') {

        $.each(sritys, function(index, value) {

          if (value.pavadinimas == calcValues.sritis) {

            $.each(value.spacialybes, function(index, value) {

              if (value.pavadinimas == calcValues.position) {
                var experience = calcValues.experience

                $('.salary').html(value[experience] + ' EUR');

              }

            });
          }
        });
      }
    })



    //Clients slick
    $('.section-slider').slick({
      infinite: true,
      slidesToShow: 1,
      prevArrow: $('.btn_left'),
      nextArrow: $('.btn_right'),
    });

    //Team slick
    $('.team-slider-container').slick({
      infinite: true,
      slidesToShow: 3,
      // centerMode: true,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      // variableWidth: true
      responsive: [
        {
            breakpoint: 1025,
              settings: {
                "slidesToShow": 2,
              }
        },
        {
            breakpoint: 601,
              settings: {
                "slidesToShow": 1,
              }
        },
      ],
    });

    //Form validate
    $("#contact-form").validate({
      errorPlacement: function() {
        return false; // suppresses error message text
      },
      errorClass: 'error-validation-class'
    });
    $.validator.addClassRules({
      required: {
        required: true
      },
      requiredemail: {
        required: true,
        email: true
      },
      minSeven: {
        required: true,
        minlength: 7
      },

    });


    //Form checkbox
    $('label').change(function() {
      let chekInput = document.querySelector('#check').checked;
      if (chekInput == !false) {
        $(this).find('.checkbox').toggleClass('checked');
      } else {
        $(this).find('.checkbox').toggleClass('checked');
      }
    });

    $(".submit_btn").click(function() {
      let chekInput = document.querySelector('#check').checked;
      if (chekInput == !true) {
        $('.checkbox').css({ 'border': '2px solid red' });
      } else {
        $('.checkbox').css({ 'border': ' 2px solid transparent' });
      }

    });

    $('label').change(function() {
      let chekInput = document.querySelector('#check').checked;
      if (chekInput == true) {
        $('.checkbox').css({ 'border': ' 2px solid transparent' });
      } else {
        $('.checkbox').css({ 'border': '2px solid red' });
      }
    });

    //Form message sending
    $(document).on('submit', '#contact-form', function(event) {
      event.preventDefault();

      $('.right_content-item').css('filter', 'blur(3px)');
      var formData = new FormData(this);
      formData.append('action', 'send_contact_form_message');

      jQuery.ajax({
        url: variables.ajaxUrl,
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',

        success: function(data) {
          // console.log(data);

          $('.right_content-item').css('filter', 'blur(0)');

          var inputValue = document.querySelectorAll('.input');
          for (var i = 0; i < inputValue.length; i++) {
            inputValue[i].value = '';
          }
          $('.checkbox').toggleClass('checked');
          $('input:checkbox').removeAttr('checked');

        }
      });
    });


    // Select all links with hashes
    $(' a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .on('click', function(event) {
        // On-page links

        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - 94
            }, 1000, function() {});
          }
        }
      });

    //Drop menu
    $('.drop-menu').click(function() {
      $('.drop-menu_content').toggleClass('displayNone');
      $('.drop-menu_content').toggleClass('displayBlock');
    });

    $(document).on('click', function(e) {
      if ($('.drop-menu_content').hasClass('displayBlock')) {

        if ($(e.target).closest(".drop-menu").length > 0) {
          return false;
        }
        $('.drop-menu_content').toggleClass('displayNone');
        $('.drop-menu_content').toggleClass('displayBlock');
      }
    });

    //Mobile menu
    $('#hamburger1').change(function(){
      let chekInput = document.querySelector('#hamburger1').checked;
    
        if(chekInput == true){
            $('.mobile-menu').toggleClass('showMeniu');
            $('html').toggleClass('overflow-fidden');
            $('header').css('background-color', 'rgba(49,59,78,.85)')

        }else{
            $('.mobile-menu').toggleClass('showMeniu');
            $('html').toggleClass('overflow-fidden');
            $('header').css('background-color', 'rgba(49,59,78,.6)')
         }
    });

  })
})(jQuery);