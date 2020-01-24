
var $window = $(window);
var fifty;
var topdiff1;
var leftdiff;
var leftdiff2;

var load = true;
var dots = true;

$(document).ready(function() {




  $('.langs-container').css({marginTop: $window.height()/2 - 10});

    $window.trigger('scroll');

    $('.nav-a').fadeOut();
    $("#fullpage").addClass("hide");
    $('.preloader').css({opacity:1});

    toggleLoad();
    toggleDots();

    fullPage();



    $window.click(function(){
      $('.divMenu, .close-nav').removeClass('show');
      $('.divMenu, .close-nav').addClass('hide');
      $('.nav-button').removeClass('hide');
      $('.nav-button').addClass('show');
      $('.nav-a').fadeOut();
    });

    $(".nav-a").click(function(event){
      event.stopImmediatePropagation();
          $('.divMenu, .close-nav').removeClass('show');
          $('.divMenu, .close-nav').addClass('hide');
          $('.nav-button').removeClass('hide');
          $('.nav-button').addClass('show');
          $('.nav-a').fadeOut();
    });

    $(".divMenu").click(function(event){
      event.stopImmediatePropagation();
    });



});



  function toggleNavButton(event){
      event.stopImmediatePropagation();

    // $('.nav-button').click(function(event){
      $('.nav-button').removeClass('show');
      $('.nav-button').addClass('hide');
           $('.divMenu, .close-nav').removeClass('hide');
           $(this).removeClass('show');
           $(this).addClass('hide');
           $('.nav-a').slideDown("slow");

    // });
  }

   function fullPage(){
       var scrollOverflow=false;
       var scrollBar = false;
       var autoScrolling = true;

        var isChromium = window.chrome;
        var winNav = window.navigator;
        var vendorName = winNav.vendor;
        var isOpera = typeof window.opr !== "undefined";
        var isIEedge = winNav.userAgent.indexOf("Edge") > -1;
        var isIOSChrome = winNav.userAgent.match("CriOS");

        if (isIOSChrome) {
           // is Google Chrome on IOS
           scrollOverflow = false;
           $(".resume-pdf").removeClass("hide");
           $(".resume-container").addClass("hide");
           
        } else if(isChromium !== null && typeof isChromium !== "undefined" &&
          vendorName === "Google Inc." &&
          isOpera === false &&
          isIEedge === false
        ) {
          scrollOverflow = false;
          
          $(".resume-pdf").removeClass("hide");
          $(".resume-container").addClass("hide");
        } else {
          console.log("true");
           scrollOverflow = false;
           autoScrolling = false;
           scrollBar = true;
        }

       $('#fullpage').fullpage({
        licenseKey: '15B50F8C-B5F449EB-9ADCB4C7-9697616B',
        sectionSelector: '.section',
        slideSelector: '.slide',
        anchors: ['home', 'career', 'personal', 'contact'],
        menu: '#myMenu',
            // more options here
        sectionsColor: ['rgba(255, 255, 255, 1)', 'rgba(255, 255, 255, 1)', '#ffffff', 'rgba(217, 217, 217, 0.9)'],
        css3:true,
        hybrid:true,
        fitToSection: false,
        scrollBar:scrollBar,
        autoScrolling:autoScrolling,
        scrollOverflow:scrollOverflow,
        navigation:false,
        showActiveTooltip:false,

        afterLoad: function(anchorLink, index){

        },

       onLeave: function(index, nextIndex, direction){
        //using anchorLink
              if(index == 1){
                $('.arrow').animate({opacity:'0'}, "fast");
            }
        }
    });

   }





   $window.on('load', function(){
        loading();
   });






function mainPicIn(){
    $("#main").removeClass("hide");
    $(".language").removeClass("hide");
    $(".langs-container").removeClass("hide");
    $('.enterDiv').css({height:$window.height(), left: 0, bottom: 0});

    $('.nav-a').fadeIn();
    $('.nav-button').fadeIn();

    $("#fullpage").removeClass("hide").addClass("show");
    $("#fullpagees").removeClass("hide").addClass("show");
    $('.preloader').css({opacity:0});

    $('.enterDiv').fadeIn();
    $('.nav-button').css({zIndex:'50'});
    $('.arrow').animate({opacity:'1'}, "fast");
}


function toggleLoad(){
    var divwidth = ($('.preloader').width()/window.innerWidth) * 100;
    var divheight = ($('.preloader').height()/window.innerHeight) * 100;

    if(load === true)
    {
         $('.preloader').animate({'left': Math.floor((Math.random() * (95 - divwidth)) + 1) + '%' , 'bottom': Math.floor((Math.random() * (95-divheight)) + 1) + '%' }, 3500, function(){
              setInterval(toggleLoad(), 300);
         });
    }else{
        dots = false;
        $('.preloader').fadeOut('fast');
        mainPicIn();

    }
}

function toggleDots(){
    if(dots === true)
    {
        $('#pl-dot1').fadeIn(200, function(){
            $('#pl-dot2').fadeIn(200, function(){
                $('#pl-dot3').fadeIn(200, function(){
                  $('#pl-dot4').fadeIn(200, function(){
                    $('#pl-dot5').fadeIn(200, function(){
                      $('#pl-dot6').fadeIn(200, function(){
                            $('#pl-dot6').fadeOut(200);
                            $('#pl-dot5').fadeOut(200);
                            $('#pl-dot4').fadeOut(200);
                            $('#pl-dot3').fadeOut(200);
                            $('#pl-dot2').fadeOut(200);
                            $('#pl-dot1').fadeOut(200, function(){
                                 setInterval(toggleDots(), 4500);
                            });
                          });
                        });
                    });
                });
            });
        });

        $('#pl-dot1-es').fadeIn(200, function(){
            $('#pl-dot2-es').fadeIn(200, function(){
                $('#pl-dot3-es').fadeIn(200, function(){
                  $('#pl-dot4-es').fadeIn(200, function(){
                    $('#pl-dot5-es').fadeIn(200, function(){
                      $('#pl-dot6-es').fadeIn(200, function(){
                            $('#pl-dot6-es').fadeOut(200);
                            $('#pl-dot5-es').fadeOut(200);
                            $('#pl-dot4-es').fadeOut(200);
                            $('#pl-dot3-es').fadeOut(200);
                            $('#pl-dot2-es').fadeOut(200);
                            $('#pl-dot1-es').fadeOut(200, function(){
                                 setInterval(toggleDots(), 4500);
                            });
                          });
                        });
                    });
                });
            });
        });

    }else{
        $('#pl-dot6').fadeOut(3000);
        $('#pl-dot5').fadeOut(2500);
        $('#pl-dot4').fadeOut(2000);
        $('#pl-dot3').fadeOut(1500);
        $('#pl-dot2').fadeOut(1000);
        $('#pl-dot2').fadeOut(500);

        $('#pl-dot6-es').fadeOut(3000);
        $('#pl-dot5-es').fadeOut(2500);
        $('#pl-dot4-es').fadeOut(2000);
        $('#pl-dot3-es').fadeOut(1500);
        $('#pl-dot2-es').fadeOut(1000);
        $('#pl-dot2-es').fadeOut(500);
    }
}



function loading(){
    load = false;
}



$window.on('resize', function(){

    $('.enterDiv').css({width:'100%', height:$window.height()});
    $('#main').css({width:'100%', height:$window.height()});
    $('.langs-container').css({marginTop: $window.height()/2 - 10});
    // if(window.innerWidth < 400){
    //     $('.enterDiv').css({left:'45%', bottom:'65%', display:'inline-table'});
    // }else if(window.innerWidth < 650){
    //     $('.enterDiv').css({left:'52%', bottom:'60%', display:'inline-table'});
    // }
    // else{
    //     $('.enterDiv').css({left:'60%', bottom:'50%', display:'inline-table'});
    // }


    fifty = $window.width()/2;
    var middle = $window.height()/2;
    leftdiff = ($window.width() *  .40) - ($('.puzzle1').width()/4);
    topdiff1 = $('.puzzle1').height();
    var topdiff3 = $('.puzzle3').height();

    $('.puzzle1, .puzzle2').css({top:middle - topdiff1});
    $('.puzzle3, .puzzle4').css({bottom:middle - topdiff3});
    $('.puzzle1, .puzzle3').css({left:fifty - leftdiff});
    $('.puzzle2, .puzzle4').css({right:fifty - leftdiff});

});
