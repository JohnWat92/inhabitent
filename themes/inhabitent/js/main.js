(function($){
    $('.search-submit').on('click', function(event){
        event.preventDefault();
    })
    $('.fa-search').on('click', function(event){
        event.preventDefault();

        $('.search-field').toggleClass('search-width');
        $('.search-field').focus();
    })
})(jQuery);