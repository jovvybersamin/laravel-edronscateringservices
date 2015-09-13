<div class="form-group">
    <label for="no_of_main_course" class="control-label">No. Of Main Course:</label>
    {!! Form::text('no_of_main_courses',null,['class' => 'form-control','id' => 'no_of_main_course']) !!}
</div>
<div class="form-group">
    <label for="price_per_head" class="control-label">Price Per Head:</label>
    <div class="input-group">
        <span class="input-group-addon">Php</span>
        {!! Form::text('price_per_head',null,['class' => 'form-control','id'=>'price_per_head']) !!}
    </div>
</div>