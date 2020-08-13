<div class="table-responsive">
    <table class="table" id="servicos-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Preco</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicos as $servico)
            <tr>
                <td>{{ $servico->nome }}</td>
            <td>{{ $servico->preco }}</td>
                <td>
                    {!! Form::open(['route' => ['servicos.destroy', $servico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicos.show', [$servico->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servicos.edit', [$servico->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
