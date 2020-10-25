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

function animatehover(){
    $('.card-img-top').hover(function() {
        let newImg = $(this).attr('src');
        $('#bla').attr('src',newImg)
    });
}
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
                let top = ($(window).height() - $(this).outerHeight()) / 2;
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


function successbells(data,time){
    let colorgreen = $('.bells').css("color", "white").css('box-shadow', 'rgb(0, 255, 17) 0 0 10px 0');
    $('#bells').html(colorgreen).show('blind', 10).html(data).delay(time).fadeOut(10);
}

myform();
function myform() {
    $("form").each(function () {
        $(this).bind("submit", function (event) {
            let bells = $(this).attr('data-bells')
            event.preventDefault();
            let formHTML = event.target;
            $.ajax({
                method: formHTML.method,
                url: formHTML.action,
                data: $(this).serialize(),
                success: function (data) {
                  datakategory(data);
                    successbells(data,1000)
                }
            });
        });
    });
}