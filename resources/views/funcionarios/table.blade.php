<div class="table-responsive">
    <table class="table" id="funcionarios-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Endereco</th>
        <th>Telefone</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->endereco }}</td>
            <td>{{ $funcionario->telefone }}</td>
                <td>
                    {!! Form::open(['route' => ['funcionarios.destroy', $funcionario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('funcionarios.show', [$funcionario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('funcionarios.edit', [$funcionario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
