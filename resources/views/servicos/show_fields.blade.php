<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $servico->id }}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $servico->nome }}</p>
</div>

<!-- Preco Field -->
<div class="form-group">
    {!! Form::label('preco', 'Preco:') !!}
    <p>{{ $servico->preco }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $servico->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $servico->updated_at }}</p>
</div>

