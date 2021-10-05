<!-- Clien Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clien', 'Clien:') !!}
    {!! Form::text('Clien', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sales', 'Sales:') !!}
    {!! Form::number('Sales', null, ['class' => 'form-control']) !!}
</div>