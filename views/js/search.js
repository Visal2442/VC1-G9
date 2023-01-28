
$(document).ready(function(){
    $('#search').keyup(function(){
        let search_text=$(this).val();
        if(search_text!=""){
            $.ajax({
                url:'/search',
                method:'get',
                data:{query:search_text},
                success: function(response){
                    $('#show_list').html(response);
                }
            })
        }
        else{
            $('#show_list').html('');
        }
    })
});