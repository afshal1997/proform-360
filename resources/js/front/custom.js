(function ($) {

  // product slider
  $('.product-slider , .best-seller-slider, .trending-slider').owlCarousel({
    loop: true,
    margin: 50,
    nav: true,
    navText: ["<i class='	fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: {
        items: 2
      },
      700: {
        items: 4
      },
      1000: {
        items: 5
      }
    }
  })
  // brands slider
  $('.brands-slider').owlCarousel({
    loop: true,
    margin: 60,
    nav: true,
    navText: ["<i class='	fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
      0: {
        items: 2
      },
      500: {
        items: 4
      },
      1000: {
        items: 6
      }
    }
  })
  // cart right script
  $(document).ready(function () {
    $('.cart-open').on('click', function () {
      $('.cart-right').addClass('cart-show');
      $(".cart-overlay").addClass("is-on");
    });
    $(".cart-overlay").on("click", function () {
      $(this).removeClass("is-on");
      $('.cart-right').removeClass('cart-show')
    });
  });
  //goto top button
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      $('.goto-top').addClass('goto-show');
    }
    if ($(window).scrollTop() < 301) {
      $('.goto-top').removeClass('goto-show');
    }
  });
  //animate to top
  $("#goto-top").click(function () {
    $('html, body').animate({
      scrollTop: $("header").offset().top
    }, 0);
  });
  $(window).scroll(function () {
    if ($(window).scrollTop() > 190) {
      $('.header-bottom').addClass('sticky-header');
    } else {
      $('.header-bottom').removeClass('sticky-header');
    }
  });
  // product page slider
  $('.product-detail-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i class='	fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots: false,
    responsive: {
      0: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  //related products slider
  $('.related-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='	fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots: false,
    responsive: {
      0: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });

  // plus minus qty
  $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
  // hover image initialize
  $(document).ready(function () {
    $(".main-img-pd").imagezoomsl({
      zoomrange: [3, 3]
    });
  });

  // adding class in product page options
  var $radios = $('.single-option input:radio');
  $radios.change(function () {
    $radios.parent().removeClass('checkedOption');
    $(this).parent().addClass('checkedOption');
  });

  $('.mega-dropdown-list .mega-dropdown-item:has(ul)').parent().addClass('inner-ul-mega');

  var megaList = document.querySelectorAll('.mega-dropdown-list');
    megaList.forEach(function(e){
        const megaListChildss = document.querySelectorAll('.mega-dropdown-list > .mega-dropdown-item');

        if(e.children.length > 4){
            e.classList.add('add-in-mega');
            megaListChildss.forEach(function(ee) {
              ee.classList.add('add-in-mega-child');
            });
        }
    })
    $('[data-toggle="popover"]').popover()

})(jQuery);
