<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $funcionario->id }}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $funcionario->nome }}</p>
</div>

<!-- Endereco Field -->
<div class="form-group">
    {!! Form::label('endereco', 'Endereco:') !!}
    <p>{{ $funcionario->endereco }}</p>
</div>

<!-- Telefone Field -->
<div class="form-group">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{{ $funcionario->telefone }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $funcionario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $funcionario->updated_at }}</p>
</div>

