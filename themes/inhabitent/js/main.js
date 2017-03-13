(function($){
    $('.fa-search').on('click', function(event){
        event.preventDefault();

        $('.search-field').toggleClass('new-width');
        $('.search-field').focus();
    })
})(jQuery);

(function($){
    $(window).scroll(function() {
        event.preventDefault();
        var scroll = $(window).scrollTop();
        if (scroll >= 870){
            $(".site-header").removeClass("reverse-header");
        }
        else{
            $(".site-header").addClass("reverse-header");
        }
    })
})
(jQuery);