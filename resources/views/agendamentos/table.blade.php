<div class="table-responsive">
    <table class="table" id="agendamentos-table">
        <thead>
            <tr>
                <th>Inicio Servico</th>
        <th>Final Servico</th>
        <th>Comentario</th>
        <th>Cliente Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agendamentos as $agendamento)
            <tr>
                <td>{{ $agendamento->inicio_servico }}</td>
            <td>{{ $agendamento->final_servico }}</td>
            <td>{{ $agendamento->comentario }}</td>
            <td>{{ $agendamento->cliente_id }}</td>
                <td>
                    {!! Form::open(['route' => ['agendamentos.destroy', $agendamento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agendamentos.show', [$agendamento->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agendamentos.edit', [$agendamento->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
