<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $modelo->titulo }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $modelo->descripcion }}</p>
</div>

<!-- Frame Field -->
<div class="form-group">
    {!! Form::label('frame', 'Frame:') !!}
    <p>{{ $modelo->frame }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $modelo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $modelo->updated_at }}</p>
</div>

