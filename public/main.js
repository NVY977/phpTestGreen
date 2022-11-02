$(function(){
              
    $("#login_form").on('submit', function(e){
        e.preventDefault();
        
        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },
            success:function(data){
                if(data.code == '400'){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                    let error = '<span class="alert alert-danger">'+data.mes+'</span>';
                    $("#res").html(error);
                }else if(data.code == '200'){
                    let success = '<span class="alert alert-success">'+data.mes+'</span>';
                    $("#res").html(success);
                    $('#login_form')[0].reset();
                }
            }
        });
    });   
});