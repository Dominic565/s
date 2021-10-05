<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product', 'Product:') !!}
    {!! Form::text('Product', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>