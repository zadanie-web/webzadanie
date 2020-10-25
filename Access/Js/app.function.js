$(document).ready(function () {
    $(document).on('click','.tooglestart',function () {
        let togdivcenter = $(this).attr("data-my-tog-center");
        let show = $(this).attr("data-divtoogle-show");
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

/** BELL */
function successbell(data,time){
    let colorgreen = $('.bell-menu').css("color", "white").css('box-shadow', 'rgb(0, 255, 17) 0 0 10px 0');
    $('#bell').html(colorgreen).show('blind', 10).html(data).delay(time).fadeOut(10);
}

/**
 * FUNCTION CENTER
 * POSITION (absolute)
 * HEIGHT , WIDTH 1/2 and 1/2
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
 * Load function start get page
 */
datakategory();
myform();



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

/**
 * My FORM
 */
function myform() {
    $("form").each(function () {
        $(this).bind("submit", function (event) {
            event.preventDefault();
            let formHTML = event.target;
            $.ajax({
                method: formHTML.method,
                url: formHTML.action,
                data: $(this).serialize(),
                success: function (data) {
                  datakategory(data);
                  successbell(data,3000)
                }
            });
        });
    });
}