
( function( $ ){

    $(document).ready(function(){
        var is_open = false;
        $('.hamburger-menu i').on('click', function(){
            var $menuMainNavigation = $('#menu-main-navigation-1');

            // bool for toggle animation
            is_open = !is_open;

            //open close bg modal
            $('#menu-modal').toggle();

            // toggle slide menu
            is_open ? $menuMainNavigation.addClass('opened') : $menuMainNavigation.removeClass('opened');
        })

        $('#myButton').on('click', function(event){
            var values = [];
            $('#myForm').serializeArray();

            console.log($('#myForm').serializeArray());
            event.preventDefault();
        })

        // $( "form" ).submit(function( event ) {
        //     console.log( $( this ).serializeArray() );
        //     event.preventDefault();
        // });

        // New Navigation Menu Toggle
        var isMenuActive = false;
        $('.site-header .hamburger').on('click', function(){
            var $menuNewNavigationContainer = $('.menu-new-navigation-container');
            var $htmlWrapper = $('.html-wrapper');
            var $hamburgerSqueeze = $('.hamburger--slider');

            isMenuActive = !isMenuActive;

            isMenuActive ? $hamburgerSqueeze.addClass('is-active') : $hamburgerSqueeze.removeClass('is-active');
            isMenuActive ? $htmlWrapper.addClass('is-active') : $htmlWrapper.removeClass('is-active');
            isMenuActive ? $menuNewNavigationContainer.addClass('is-active') : $menuNewNavigationContainer.removeClass('is-active');

        });

        // cancel menu top level click
        // $('.menu-new-navigation-container .menu-item a').on('click', function(event){
        //     return false;
        // });

        // New Navigation Menu hover
        $('.menu-item').on('mouseenter mouseleave', function(event){
            var $subMenu = $(this).find('.sub-menu');

            if($subMenu.hasClass('is-active')){
                $subMenu.removeClass('is-active');
            } else {
                $subMenu.addClass('is-active');
            }
        });



    })

    // function ajax_test(){
    //     console.log('clicked')
    //     $.ajax({
    //         url: 'http://localhost:8888/wp_practice_2/team/',
    //         success: function( data ){
    //             alert( 'Your page has ' + $(data).find('div').length + ' divs.');
    //         }
    //     })
    // }






})( jQuery );