<div>
    {!! Form::hidden('id',null) !!}
</div>

<div class="form-group required">
    {!! Form::label('name','Name:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('name',null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group required">
    {!! Form::label('menu_id','Menu:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('menu_id',$menus,null,['class' => 'form-control'])!!}
    </div>
</div>

<div class="form-group required">
    {!! Form::label('price_per_head','Price / Head:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('price_per_head',null, ['class' => 'form-control' ,'placeholder' => '0.00']) !!}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.menuitems.index') }}" class="btn btn-default">
            Cancel
        </a>
    </div>
</div>

