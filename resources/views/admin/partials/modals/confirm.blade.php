<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this selected record?&hellip;</p>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>
        <button id="deleteModalClose" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="deleteModalConfirm" type="button" class="btn btn-primary">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->