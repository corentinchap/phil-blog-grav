/**
 * Main JS file for Casper behaviours
 */

/* globals jQuery, document */
(function ($, undefined) {
    "use strict";

    var $document = $(document);

    $document.ready(function () {

        $(".scroll-down").arctic_scroll();

        $(".menu-button, .nav-cover, .nav-close").on("click", function(e){
            e.preventDefault();
            $("body").toggleClass("nav-opened nav-closed");
        });

        // var srcset = $('.main-header .header-image').attr('srcset');
        // // /user/pages/01.blog/ag94P5AlRGpEkwN@2x.jpg 1000w, /user/pages/01.blog/ag94P5AlRGpEkwN.jpg 640w
        
        // var resolutions = $(".main-header .header-image").attr("srcset").split(",");
        // var resolution =[];

        // for(var item in resolutions){
        //     console.log(item);
        //     console.log(item.split(' '));
        //    // resolution.push(item);
        // }
        // console.log(resolution);

        //$('.main-header').css('background', )
            // background: -webkit-image-set( url('path/to/image') 1x, url('path/to/high-res-image') 2x );

        
        
         window.onresize = resizeHeader;
         window.onload = resizeHeader;

        function resizeHeader() {
            if(true)
            {
                var height = $('img.header-image').css('height');
                $('.main-header').css('height', height);
            }
            else{
                $('img.header-image').css('height',$('.main.header').css('height'));
            }
            
        }
        // Responsive header
        var header = $('header.main-header');

        $(document).on('load resize', function(e){
            console.log('rdy sir');
        })
       var accordionsMenu = $('.accordion-menu');

        if( accordionsMenu.length > 0 ) {
            
            accordionsMenu.each(function(){
                var accordion = $(this);
                //detect change in the input[type="checkbox"] value
                accordion.on('change', 'input[type="checkbox"]', function(){
                    var checkbox = $(this);
                    console.log(checkbox.prop('checked'));
                    $(this).next('label').toggleClass('open');
                    ( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown('500', 'swing') : checkbox.siblings('ul').attr('style', 'display:block;').slideUp('500', 'swing');
                });
            });
        }
    });

    // Arctic Scroll by Paul Adam Davis
    // https://github.com/PaulAdamDavis/Arctic-Scroll
    $.fn.arctic_scroll = function (options) {

        var defaults = {
            elem: $(this),
            speed: 500
        },

        allOptions = $.extend(defaults, options);

        allOptions.elem.click(function (event) {
            event.preventDefault();
            var $this = $(this),
                $htmlBody = $('html, body'),
                offset = ($this.attr('data-offset')) ? $this.attr('data-offset') : false,
                position = ($this.attr('data-position')) ? $this.attr('data-position') : false,
                toMove;

            if (offset) {
                toMove = parseInt(offset);
                $htmlBody.stop(true, false).animate({scrollTop: ($(this.hash).offset().top + toMove) }, allOptions.speed);
            } else if (position) {
                toMove = parseInt(position);
                $htmlBody.stop(true, false).animate({scrollTop: toMove }, allOptions.speed);
            } else {
                $htmlBody.stop(true, false).animate({scrollTop: ($(this.hash).offset().top) }, allOptions.speed);
            }
        });

    };
})(jQuery);