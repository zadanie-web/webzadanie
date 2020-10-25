$(document).ready(function () {
    $(document).on('click','.tooglestart',function () {
        let togdivcenter = $(this).attr("data-my-tog-center");
        let show = $(this).attr("data-divtoogle-show");
        let direct = $(this).attr("data-divtoogledirect");
        let delay = $(this).attr("data-my-delay");
        $("#" + togdivcenter).center().toggle(show, 100);
        $('#myblac').toggleClass('black');

    });
});


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