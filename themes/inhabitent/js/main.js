(function($){

    $('.fa-search').on('click', function(event){
        event.preventDefault();
       
        $('.search-field').toggleClass('search-width');
        $('.search-field').focus();
    })

    $('.search-field').blur(function(){
        $('.fa-search').click();
    })
})(jQuery);

// (function($){

//     $('.search-submit').on('click', function(event){
//         event.preventDefault();

// })
// })(jQuery);