(function($){
    $(document).ready(function (){

        function AllRole(){
            $.ajax({
               url : 'allrole',
               success : function (data){
                    $('tbody#role_body').html(data);
               }
            });
        }
        AllRole();


       $('.log-cls').click(function (e){
           e.preventDefault();
           $('#log').submit();
       });

    $('#modal_btn').click(function (e){
        e.preventDefault();
        $('#role_modal').modal('show');
    });

    $(document).on('click','#status_btn',function (e){
        e.preventDefault();
        let id = $(this).attr('status_id');
        $.ajax({
            url:'status/'+id,
            success:function (data){
                AllRole();
            }

        })
    });
    });
    // $(document).on('click','#status_btn',function (e){
    //     e.preventDefault();
    //     let id = $(this).attr('status_id');
    //     $.ajax({
    //         url:'status/'+id,
    //         success:function (data){
    //             alert(data);
    //         }
    //
    //     })
    // });




})(jQuery)
