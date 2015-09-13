<div class="form-group required">
    {!! Form::label('name','Name:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('is_main_course','Is Main Course:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        <div class="checkbox">
               {!! Form::checkbox('is_main_course') !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.menus.index') }}" class="btn btn-default">
            Cancel
        </a>
    </div>
</div>

