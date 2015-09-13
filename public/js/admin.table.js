var $modal = $('#deleteModal');

$('.table-delete').on('click', function(e){
    e.preventDefault();
    $modal.data('action',$(this).attr('href'));
    $modal.data('_token',$('#_token').val());
    $modal.modal('show');
});

$('#deleteModalConfirm').on('click',function(e){
    var action = $modal.data('action');
    var _token = $modal.data('_token');
    $.ajax({
        type:'POST',
        url:action,
        data:{ _method:'DELETE',_token:_token},
        success: function(response){
            console.log(response);
        }
    });
    $modal.modal('hide');
});


var JS














