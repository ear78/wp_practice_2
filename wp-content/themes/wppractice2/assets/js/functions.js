
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
    })




})( jQuery );