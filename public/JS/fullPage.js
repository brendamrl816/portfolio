
var $window = $(window);
var fifty;
var topdiff1;
var leftdiff;
var leftdiff2;

var load = true;
var dots = true;

$(document).ready(function() {
   
    $window.trigger('scroll');
    $('.nav-a').fadeOut();
    $('.dot1, .dot2, .dot3').fadeOut();
    
    $('.enterDiv').css({opacity:1});
    
    toggleLoad();
    toggleDots();
    
    fullPage();
 
    $('.nav-button').click(function(){
       
           $('.divMenu, .close-nav').removeClass('hide');
           $(this).removeClass('show');
           $(this).addClass('hide');
           $('.divMenu, .close-nav').addClass('show');
           $('.nav-a').slideDown("slow");
       
    });
    
    $('.section, .close-nav').click(function(){
       
       if($('.divMenu').hasClass('show')){
           $('.divMenu, .close-nav').removeClass('show');
           $('.divMenu, .close-nav').addClass('hide');
           $('.nav-button').removeClass('hide');
           $('.nav-button').addClass('show');
           $('.nav-a').fadeOut();
        
       }
    });

});

   function fullPage(){
       $('#fullpage').fullpage({
        sectionSelector: '.section',
        slideSelector: '.slide',
        anchors: ['home', 'career', 'personal', 'contact'],
        menu: '#myMenu',
            // more options here 
        sectionsColor: ['rgba(217, 217, 217, 0.4)', 'rgba(217, 217, 217, 0.8)', '#f2f2f2', 'rgba(217, 217, 217, 0.9)'],
        css3:true,
        hybrid:true,
        fitToSection: false,
        autoScrolling:false,
        navigation:false,
        showActiveTooltip:false,
        
        afterLoad: function(anchorLink, index){
            // var loadedSection = $(this);

        //using anchorLink
            
            if(anchorLink == 'career'){
                $('.head2').addClass('in-view');
                
                $('.blue').addClass('opacity');
                // $('.green').addClass('opacity');
                $('.brown').addClass('opacity');
            
             }else if(anchorLink == 'personal'){
                $('.head4').addClass('in-view');
                $('.pink').addClass('opacity');
                $('.SlidePic').animate({opacity:'0.9'}, "slow");
              
             }
        },
        
       onLeave: function(index, nextIndex, direction){
        //using anchorLink
            if(index == 1){
                $('.arrow').animate({opacity:'0'}, "fast");
            }
            else if(index == 2){
                $('.blue').removeClass('opacity');
                $('.green').removeClass('opacity');
            
            }else if(index == 3){
                $('.pink').removeClass('opacity');
                $('.SlidePic').animate({opacity:'1'}, "fast");
            
            }
        }
    });
   }
   
   
  
   $window.on('load', function(){
        loading();
   });

    $window.on('resize', function(){
        
        if(window.innerWidth < 400){
            $('.enterDiv').css({left:'45%', bottom:'65%', display:'inline-table'});
        }else if(window.innerWidth < 650){
            $('.enterDiv').css({left:'52%', bottom:'60%', display:'inline-table'});
        }
        else{
            $('.enterDiv').css({left:'60%', bottom:'50%', display:'inline-table'});
        }
        
        
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


function puzzleFade(){
    $('.puzzle1, .puzzle2, .puzzle3, .puzzle4').fadeOut();
}



function mainPicIn(){
    $('.mainPic').animate({'opacity':'1'});
    
     if(window.innerWidth < 400){
        $('.enterDiv').css({left:'45%', bottom:'60%', display:'inline-table'});
    }else if(window.innerWidth < 650){
        $('.enterDiv').css({left:'52%', bottom:'60%', display:'inline-table'});
    }
    else{
        $('.enterDiv').css({left:'60%', bottom:'50%', display:'inline-table'});
    }
    
    $('.enterDiv').fadeIn();
    $('.nav-button').css({zIndex:'50'});
    $('.arrow').animate({opacity:'1'}, "fast");
}


function toggleLoad(){
    var divwidth = ($('.enterDiv').width()/window.innerWidth) * 100;
    var divheight = ($('.enterDiv').height()/window.innerHeight) * 100;
    
    if(load == true)
    {
        
         $('.enterDiv').animate({'left': Math.floor((Math.random() * (95 - divwidth)) + 1) + '%' , 'bottom': Math.floor((Math.random() * (95 - divheight)) + 1) + '%' }, 2000, function(){
              setInterval(toggleLoad(), 2100);
         });
    }else{
        dots = false;
        $('.enterDiv').fadeOut('fast');
        startPuzzle();
    }
}

function toggleDots(){
    if(dots == true)
    {
        $('.dot1').fadeIn(500, function(){
            $('.dot2').fadeIn(500, function(){
                $('.dot3').fadeIn(500, function(){
                    $('.dot3').fadeOut(500);
                    $('.dot2').fadeOut(500);
                    $('.dot1').fadeOut(500, function(){
                         setInterval(toggleDots(), 2500);
                    });
                });
            });
        });
        
    }else{
        $('.dot3').fadeOut(500);
        $('.dot2').fadeOut(1000);
        $('.dot1').fadeOut(1500);
    }
}


function loading(){
    load = false;
}


function startPuzzle(){
        // fifty = $window.width()/2;
        fifty = $window.width() * .40;
        var middle = $window.height() * .30;
        
        
        // if($window.width() < 450){
        //     leftdiff = ($window.width() *  .40) - ($('.puzzle1').width()/4);
        // }else if($window.width() < 700){
        //     leftdiff = ($window.width() *  .35) - ($('.puzzle1').width()/4);
        // }else if($window.width() < 1100){
        //     leftdiff = ($window.width() *  .30) - ($('.puzzle1').width()/4);
        // }else{
        //     leftdiff = ($window.width() *  .25) - ($('.puzzle1').width()/4);
        // }
        
        topdiff1 = $('.puzzle1').height();
        leftdiff = $('.puzzle1').width();
        leftdiff2 = $('.puzzle2').width();
        var topdiff4 = $('.puzzle3').height()/2.07;
        
        $('.puzzle1, .puzzle2, .puzzle3, .puzzle4').css({opacity:'0.9'});
       
        $('.puzzle1, .puzzle2').css({top:middle - topdiff1});
        $('.puzzle2, .puzzle4').css({left: window.innerWidth - leftdiff2});
        $('.puzzle3').css({top:middle}); 
        $('.puzzle4').css({top:middle + topdiff4}); 
       
        $('.puzzle1').animate({"left":fifty - leftdiff}, 300);
        $('.puzzle2').animate({"left":fifty - (leftdiff2/2) }, 300);
       
        setTimeout(puzzleIn, 300);
        setTimeout(puzzleFade, 600);
        setTimeout(mainPicIn, 800);
}

function puzzleIn(){
    
    $('.puzzle3').animate({"left":fifty - leftdiff}, 300);
    $('.puzzle4').animate({"left":fifty - (leftdiff2/2)}, 300);
}