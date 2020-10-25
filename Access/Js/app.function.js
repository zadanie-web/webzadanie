/**
 * FUNCTION CENTER
 * POSITION (absolute)
 * HEIGHT , WIDTH 1/3 and 1/2
 */
(function($){
    $.fn.extend({
        center: function () {
            return this.each(function() {
                //let tops = $(this).attr("data-top");
                let top = ($(window).height() - $(this).outerHeight()) / 3;
                let left = ($(window).width() - $(this).outerWidth()) / 2;
                $(this).css({position:'absolute', margin:0, top: (top > 0 ? top : 0)+'px', left: (left > 0 ? left : 0)+'px'});
            });
        }
    });
})(jQuery);




/**
 * Load kategory start get page
 */
datakategory();

/**
 * FUNCTION FOR LOAD KATEGORY
 */
function datakategory(){
    $.ajax({
        url:'Kategory',
        method:'POST',
        success:function (data){
            $('#MyKategory').html(data);
        }
    })
}