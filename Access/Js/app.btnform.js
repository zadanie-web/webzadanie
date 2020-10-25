$(document).on('click','.actions-btn',function () {
    let actionf = $(this).attr('data-action');
    let posta = $(this).attr('data-act');
    let ids = $(this).attr('data-pol');
    let datatype = $(this).attr('data-type');
    let dattrue = $(this).attr('data-true');
    let header = $(this).attr('data-header');
    $.ajax({
        type: "POST",
        url: actionf,
        data: {action: posta, pol: ids},
        dataType: datatype,
        success: function (data) {
            $('#mykat').html(data);
            if (dattrue){
                $.ajax({
                    tape:"POST",
                    url:header,
                    data:{action: posta,pol:ids},
                    success: function (data){

                    }
                })
            }
        }
    })
});
