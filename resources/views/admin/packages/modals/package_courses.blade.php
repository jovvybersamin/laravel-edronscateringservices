<div class="modal fade" id="package-courses-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    {!! Form::open(['id' => 'package-course-form','route' => 'admin.package-course.store'] ) !!}
    {!! Form::hidden('package_id',$package->id) !!}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New Package Course</h4>
      </div>
      <div class="modal-body">


          @include('admin.packages.modals._package_courses_forms')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Save',['class' => 'btn btn-primary', 'id' => 'package-course-form-save']) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>