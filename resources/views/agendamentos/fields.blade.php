<!-- Inicio Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_servico', 'Inicio Servico:') !!}
    {!! Form::date('inicio_servico', null, ['class' => 'form-control','id'=>'inicio_servico']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#inicio_servico').datetimepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
             dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
             dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Final Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('final_servico', 'Final Servico:') !!}
    {!! Form::date('final_servico', null, ['class' => 'form-control','id'=>'final_servico']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#final_servico').datetimepicker({
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
             dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
             dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Comentario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario', 'Comentario:') !!}
    {!! Form::text('comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agendamentos.index') }}" class="btn btn-default">Cancelar</a>
</div>
