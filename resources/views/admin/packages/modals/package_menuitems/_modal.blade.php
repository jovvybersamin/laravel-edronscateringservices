<div class="modal fade " id="package-menuitems-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <form action="{{ route('admin.package-menuitem.add',$package->id) }}" method="POST" id="package-menuitem-form">
    {!! Form::hidden('package_id',$package->id) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="_method" value="POST"/>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Menu Items</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Add',['class' => 'btn btn-primary', 'id' => 'package-rule-form-save']) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>

