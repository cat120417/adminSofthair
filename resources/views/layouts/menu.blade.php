<li class="{{ Request::is('funcionarios*') ? 'active' : '' }}">
    <a href="{{ route('funcionarios.index') }}"><i class="fa fa-edit"></i><span>Funcionários</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('servicos*') ? 'active' : '' }}">
    <a href="{{ route('servicos.index') }}"><i class="fa fa-edit"></i><span>Serviços</span></a>
</li>


<li class="{{ Request::is('agendamentos*') ? 'active' : '' }}">
    <a href="{{ route('agendamentos.index') }}"><i class="fa fa-edit"></i><span>Agendamentos</span></a>
</li>

