{!! Form::model($package_course,['id' => 'package-course-edit-form','method' => 'PUT','route' => array('admin.package-course.update',$package_course->id)]) !!}
{!! Form::hidden('package_id',$package->id) !!}
{!! Form::hidden('id',$package_course->id) !!}

<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Package Course</h4>
    </div>
    <div class="modal-body">
           @include('admin.packages.modals._package_courses_forms')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Save',['class' => 'btn btn-primary', 'id' => 'update']) !!}
    </div>
</div>
{!! Form::close() !!}