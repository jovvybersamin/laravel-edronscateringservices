{!! Form::hidden('id',null) !!}

<div class="form-group required">
   {!! Form::label('name','Name:',['class' => 'col-sm-2 control-label required']) !!}
   <div class="col-sm-6">
    {!! Form::text('name',null,['class' => 'form-control']) !!}
   </div>
</div>

<div class="form-group required">
   {!! Form::label('email','Email:',['class' => 'col-sm-2 control-label']) !!}
   <div class="col-sm-6">
    {!! Form::text('email',null,['class' => 'form-control']) !!}
   </div>
</div>

<div class="form-group required">
   {!! Form::label('username','Username:',['class' => 'col-sm-2 control-label']) !!}
   <div class="col-sm-6">
    {!! Form::text('username',null,['class' => 'form-control']) !!}
   </div>
</div>

<div class="form-group required">
   {!! Form::label('password','Password:',['class' => 'col-sm-2 control-label']) !!}
   <div class="col-sm-6">
    {!! Form::password('password',['class' => 'form-control']) !!}
   </div>
</div>

<div class="form-group">
  {!! Form::label('is_admin','Is Administrator:',['class' => 'col-sm-2 control-label']) !!}
   <div class="col-md-6">
         <div class="checkbox">
             {!! Form::checkbox('is_admin') !!}
         </div>
    </div>
</div>

<div class="form-group">
  {!! Form::label('is_active','Is Active:',['class' => 'col-sm-2 control-label']) !!}
   <div class="col-md-6">
         <div class="checkbox">
             {!! Form::checkbox('is_active',1,true) !!}
         </div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.users.index') }}" class="btn btn-default">
            Cancel
        </a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-default">
            Back to list
        </a>
    </div>
</div>



