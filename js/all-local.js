
/*Login form function to position on middle and others*/
$(document).ready(function(){
        //open popup
            $("#admin-login").click(function(){
            $("#form").fadeIn(1000);
            positionPopup();
        });

            //close popup
            $(".close").click(function(){
                $("#form").fadeOut(500);
            });
        });

        //position the popup at the center of the page
        function positionPopup(){
            if(!$("#form").is(':visible')){
            return;
        } 

        $("#form").css({
            left: ($(window).width() - $('#form').width()) / 2,
            top: ($(window).width() - $('#form').width()) / 7,
            position:'absolute'
        });

        }

    //maintain the popup at center of the page when browser resized
    $(window).bind('resize',positionPopup); /*Login form function to position on middle and others*/

/* smooth scrolling function*/
    $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                        }, 1000);
                    return false;
                    }
                }
            });
        }); /* smooth scrolling function*/

    /* mainpage dropdown menu togle function */

    function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-2').removeClass('active');
                });

            });

            $(function() {

                var dd = new DropDown( $('#dd2') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-2').removeClass('active');
                });

            }); /* mainpage dropdown menu togle function */
