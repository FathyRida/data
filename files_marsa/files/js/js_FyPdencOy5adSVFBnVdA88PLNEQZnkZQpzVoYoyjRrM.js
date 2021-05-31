function openTab(evt, tabName){
    var i, infos, tabBtn ;
    infos = document.getElementsByClassName("infos-terminaux");
    for (i = 0; i < infos.length; i++){
        infos[i].style.display = "none";
    }
    tabBtn = document.getElementsByClassName("tab");
    for (i = 0; i < tabBtn.length; i++){
        tabBtn[i].className = tabBtn[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

$(document).ready(function(){
    $('.infos_selected_port').each(function(index) {
        var infos_div = $(this);
        if (infos_div .height() > 325.6) {
            $('#cont-port').css('height',$('#cont-port').height()+(infos_div.height()-325.6) + 'px')
        }
    });
    var sup_er ='1<sup>er</sup>' ;
    $('.key-fig-title').eq(0).html(sup_er);
    $("html[lang=ar]").attr("dir", "rtl")
        .find("body").addClass("right-to-left");

        mydir = $("html").attr("dir");
        if (mydir == 'rtl') {
            rtlVal=true
        }
        else{
            rtlVal=false
            }
    $('.slider-1').owlCarousel({
        rtl: rtlVal,
        loop: true,
        rewind: true,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout:4000,
        autoplayHoverPause: true,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            }
        },
        dots: false,
        navText: ['<i class="arrow_left"></i>', '<i class="arrow_right"></i>']
    });
});
$(document).ready(function(){
    $('.slider_ports').owlCarousel({
        loop: true,
        rewind: true,
        nav: true,
        items: 1,
        autoplay: false,
        autoplayTimeout:2000,
        autoplayHoverPause: true,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            }
        },
        dots: false,
        navText: ['<i class="arrow_left"></i>', '<i class="arrow_right"></i>']
    });
    $('.slider_news').owlCarousel({
        loop: true,
        rewind: true,
        nav: true,
        items: 3,
        autoplay: false,
        autoplayTimeout:2000,
        autoplayHoverPause: true,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 3
            }
        },
        dots: false,
        navText: ['<i class="arrow_left"></i>', '<i class="arrow_right"></i>']

    });
    $('.presentation_slider').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        items: 2,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 15,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 2
            }
        },
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });
    $('.slider_header_ports').owlCarousel({
        stagePadding:0,
        loop: true,
        rewind: true,
        nav: false,
        items: 1,
        autoplay: false,
        autoplayTimeout:2000,
        autoplayHoverPause: true,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            }
        },
    });
});
$(document).ready(function() {
    var bigimage = $("#big");
    var thumbs = $("#thumbs");
    //var totalslides = 10;
    var syncedSecondary = true;

    bigimage
        .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            // autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']

        })
        .on("changed.owl.carousel", syncPosition);

    thumbs
        .on("initialized.owl.carousel", function() {
            thumbs
                .find(".owl-item")
                .eq(0)
                .addClass("current");
        })
        .owlCarousel({
            items: 6,
            margin: 15,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 1,
            responsiveRefreshRate: 100
        })
        .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
        //if loop is set to false, then you have to uncomment the next line
        //var current = el.item.index;

        //to disable loop, comment this block
        console.log(el);
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
        //to this
        thumbs
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = thumbs.find(".owl-item.active").length - 1;
        console.log(onscreen)
        var start = thumbs
            .find(".owl-item.active")
            .first()
            .index();
        var end = thumbs
            .find(".owl-item.active")
            .last()
            .index();
        console.log(end);
        if (current > end) {
            thumbs.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
            thumbs.data("owl.carousel").to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            bigimage.data("owl.carousel").to(number, 100, true);
        }
    }

    thumbs.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 300, true);
    });

    // slider decouvrir plus
    $('.slider_decouvrir_plus').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        items: 2,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 15,
        stagePadding: 50,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    // $(".top_plus").on("click", function () {
    //     $(".listing_publications").toggle();
    //     var imgsrc = "/themes/custom/marsa/assets/images_icons/plus.png";
    //     var showed = $(".listing_publications").css('display') == 'block';
    //     if (showed){
    //         var imgsrc = "/themes/custom/marsa/assets/images_icons/minus.png";

    //     }
    //     $('#icon-pls').attr('src', imgsrc);
    // });

    // $('.top_plus').click(function() {
    //     //Use the current button which triggered the event
    //     $(this)
    //       //Find the sibling you want to toggle, of a specified class
    //       .siblings('.listing_publications')
    //       //Toggle (hide or show) accordingly to the previous display status of the element
    //       .toggle();
          
    //   });
    //   var imgsrc ;
    //   var showed = $(".listing_publications").css('display') == 'block';
    //   if (showed){
    //     imgsrc = "/themes/custom/marsa/assets/images_icons/minus.png";
    //   }
    //   else{
    //     imgsrc = "/themes/custom/marsa/assets/images_icons/plus.png";

    //   }
    //   $('#icon-pls').attr('src', imgsrc);

      // MEDIATHEQUE
    $('.slider_media, .slider_media_videos').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        items: 1,
        margin: 0,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

    
    // CONTACT FORM INPUTS
    $(".contactez_nous .contact_form form input").focus(function() {
        $(this).prev().hide();
    });
    $(".contactez_nous .contact_form form input").focusout(function() {
        $(this).prev().show();
    });

    // GLOBAL PAGE TABS JS
    $('.global_tabs ul li a').on("click", function() {
        $('.global_tabs ul li').removeClass('active');
        $(this).parent().addClass('active');
    });

    $("#open-bar").click(function () {
        $("#search-bar").css("display","flex");
        $("#edit-search-api-fulltext").focus()
    });
    $('.switcher-lang').on("click", function() {
        $(this).classList.toggle('active-link');
    });

    $('#timeline_historique ul.timeline_years a').on("click", function() {
        $('#timeline_historique ul.timeline_years a').removeClass('active');
        $(this).addClass('active');
    });
    // void chose select
    $("#webform-submission-contact-add-form select").prepend("<option value='' selected='selected'></option>");

    $('#webform-submission-contact-add-form select').change(function() {

        $("#webform-submission-contact-add-form select > option").each(function() {
          if ($(this).val() == ''){
           $(this).removeAttr('selected');
           }
        });
        
        });
        $('.page_gouvernance .tabs_gov .goto_div').on('click', function() {  
            $('html, body').animate({scrollTop: $(this.hash).offset().top - 200}, 500);
            return false;
        });

   
});
$(window).scroll(function() {
    if ($(window).scrollTop() > 60) {
      $("#block-custommenusprincipalmenublock").css({
        'position': 'fixed',
        'top': '15px',
        'width': '100%',
        'z-index': '99'
      });
      $(".menu_principal").css({
        'background-color': 'rgba(88,88,90,0.93)',
      });
    }
    else{
     $("#block-custommenusprincipalmenublock").css({
            'position': 'relative',
            'z-index': '12',
            'top' : '0px'
    });
    $(".menu_principal").css({
        'background-color': 'transparent',
      });
    }
  });
  $(function(){

    $(".liste-langue a").click(function(){

        $(".choose-lang:first-child").text($(this).text());
        $(".choose-lang:first-child").val($(this).text());
  
     });

     $("#edit-search-api-fulltext").focus(function() {
        $(this).select();
    });

});
$(document).mouseup(function(e) 
{
    var container = $("#search-bar");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0 ) 
    {
        container.hide();
    }
});
$(document).keyup(function(e) {
    if (e.key === "Escape") {  
        var container = $("#search-bar");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0 ) 
    {
        container.hide();
    }
   }
});

  var a = 0;
  $(window).scroll(function() {
    
  
    var oTop = $('#chiffre-count').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.chiffre_title').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },
  
          {
  
            duration: 2000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }
  
          });
      });
      a = 1;
    }
  });
  
  
//   $(window).ready(function () {
//       $( "#chiffre-count-2" ).each(function() {
          
//             if ($('.key-fig-title div').hasClass('counter-loaded')) return;
//             $('.key-fig-title div').addClass('counter-loaded');
        
//             $('.key-fig-title div').each(function() {
//                 var $this = $(this);
//                 var nbr = $this.text();
//                 var x;
//                 if(!Number.isInteger(nbr))
//                 {
//                     x = parseInt(nbr);
//                 }
//                 // else if(!Number.isInteger(nbr)){
//                 //     x = parseFloat(nbr);
//                 // }
//                 jQuery({
//                 Counter: 0
//                 }).animate({
//                 Counter: x
//                 }, {
//                 duration: 5000,
//                 easing: 'swing',
//                 step: function() {
//                     $this.text(Math.ceil(this.Counter));
//                 }
//                 });
//             });

//       });
//   });
  
  /* function startTimer($this) {
      setTimeout(function(){
          var $a = $this.html();
          $this.html($this.html() + 1);
          startTimer($this);
      }, 1000); 
  }
   */
  
// SK JS // sk
// SLIDER PRESENTATION
$(document).ready(function() {
    $('.presentation_slider').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        items: 2,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 15,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 2
            }
        },
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });
    // SLIDER DETAIL FILIALES
    var bigimage = $("#big");
    var thumbs = $("#thumbs");
    //var totalslides = 10;
    var syncedSecondary = true;

    bigimage
        .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            // autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']

        })
        .on("changed.owl.carousel", syncPosition);

    thumbs
        .on("initialized.owl.carousel", function() {
            thumbs
                .find(".owl-item")
                .eq(0)
                .addClass("current");
        })
        .owlCarousel({
            items: 6,
            margin: 15,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 1,
            responsiveRefreshRate: 100
        })
        .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
        //if loop is set to false, then you have to uncomment the next line
        //var current = el.item.index;

        //to disable loop, comment this block
        console.log(el);
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
        //to this
        thumbs
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = thumbs.find(".owl-item.active").length - 1;
        console.log(onscreen)
        var start = thumbs
            .find(".owl-item.active")
            .first()
            .index();
        var end = thumbs
            .find(".owl-item.active")
            .last()
            .index();
        console.log(end);
        if (current > end) {
            thumbs.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
            thumbs.data("owl.carousel").to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            bigimage.data("owl.carousel").to(number, 100, true);
        }
    }

    thumbs.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 300, true);
    });

    // SLIDER DECOUVRIR PLUS

    $('.slider_decouvrir_plus').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        items: 2,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 15,
        stagePadding: 50,
        responsive: {
            375: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
       // GOUVERNANCE PAGE TABS JS
       $('.page_gouvernance .tabs_gov ul li a').on("click", function() {
        $('.page_gouvernance .tabs_gov ul li').removeClass('active');
        $(this).parent().addClass('active');
    });
    $('[data-toggle="tooltip"]').tooltip();
});
var a = 0;
$(window).scroll(function() {
  

  var oTop = $('.page_detail_filiale .chiffres').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.page_detail_filiale .chiffres .devis .num').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 5000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }

        });
    });
    a = 1;
  }
});;
