<div class="form-group required">
    {!! Form::label('menu_id','Menu:',['class' => 'control-label']) !!}
    <div class="">
        {!! Form::select('menu_id',$menus,null,['class' => 'form-control'])!!}
    </div>
</div>

<div class="form-group required">
    {!! Form::label('no_of_items','No. of Items:',['class' => 'control-label']) !!}
    <div class="">
       {!! Form::text('no_of_items',null,['class' => 'form-control','id' => 'no_of_main_course']) !!}
    </div>
</div>