$(function(){
    var $Busdetails = $('.main-area-right');
    $.ajax({
        type:'GET',
        url:'busDetailsProcess.php',
        success:function(busDetails){
        $.each(busDetails,function(i,busDetail){
            $.Busdetails.append('<li> vehical_no = '+busDetail.vehical_no+'</li>');
        });
     }
    });
});