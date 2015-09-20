{!! Form::model($package_rule,['id' => 'package-rule-edit-form','method' => 'PUT','route' => array('admin.package-rule.update',$package_rule->id)] ) !!}
{!! Form::hidden('package_id',$package->id) !!}
{!! Form::hidden('id',$package_rule->id) !!}

   <div class="modal-content">
       <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="exampleModalLabel">Edit Package Rule</h4>
       </div>
       <div class="modal-body">
              @include('admin.packages.modals.package_rules._package_rule_form')
       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           {!! Form::submit('Save',['class' => 'btn btn-primary', 'id' => 'update']) !!}
       </div>
   </div>

{!! Form::close() !!}