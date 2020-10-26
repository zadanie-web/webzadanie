/**
 * FOR TOOGLE
 * TOOGLE CENTER
 */

$(document).ready(function () {
    $(document).on('click','.tooglestart',function () {
        let starttoogle = $(this).attr("data-divtoogle");
        let togdivback = $(this).attr("data-mytog-back");
        let togdivcenter = $(this).attr("data-my-tog-center");
        let show = $(this).attr("data-divtoogle-show");
        $("#" + starttoogle).toggle(show, 100 );
        $("#" + togdivback).toggle(show, 100 );
        if (togdivcenter) {
            $("#" + togdivcenter).center().toggle(show, 100);
            $('#myblac').toggleClass('black');
        }
    });
});