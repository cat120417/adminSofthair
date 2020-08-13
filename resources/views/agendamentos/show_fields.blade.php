<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $agendamento->id }}</p>
</div>

<!-- Inicio Servico Field -->
<div class="form-group">
    {!! Form::label('inicio_servico', 'Inicio Servico:') !!}
    <p>{{ $agendamento->inicio_servico }}</p>
</div>

<!-- Final Servico Field -->
<div class="form-group">
    {!! Form::label('final_servico', 'Final Servico:') !!}
    <p>{{ $agendamento->final_servico }}</p>
</div>

<!-- Comentario Field -->
<div class="form-group">
    {!! Form::label('comentario', 'Comentario:') !!}
    <p>{{ $agendamento->comentario }}</p>
</div>

<!-- Cliente Id Field -->
<div class="form-group">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $agendamento->cliente_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $agendamento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $agendamento->updated_at }}</p>
</div>

