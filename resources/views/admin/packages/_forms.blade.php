<div class="form-group required">
    {!! Form::label('name','Name:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name',null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description','Description:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textarea('description',null, ['class' => 'form-control','rows'=>'4','cols' => '50']) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.packages.index') }}" class="btn btn-default">
            Cancel
        </a>
    </div>
</div>
