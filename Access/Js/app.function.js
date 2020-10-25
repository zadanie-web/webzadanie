function datakategory(){
    $.ajax({
        url:'Kategory',
        method:'POST',
        success:function (data){
            $('#MyKategory').html(data);
        }
    })
}