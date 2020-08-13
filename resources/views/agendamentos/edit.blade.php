@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agendamento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($agendamento, ['route' => ['agendamentos.update', $agendamento->id], 'method' => 'patch']) !!}

                        @include('agendamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection