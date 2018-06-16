
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