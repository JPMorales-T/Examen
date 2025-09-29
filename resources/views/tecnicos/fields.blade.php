<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'required', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('estado', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('estado', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('estado', 'Estado', ['class' => 'form-check-label']) !!}
    </div>
</div>