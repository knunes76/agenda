@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <h3>Agenda</h3>
        {!!
        Button::primary('Nova Agenda')->asLinkTo(route('agenda.create')); 
        !!}      
    </div>
    <div class='row'>
        @foreach( $agenda as $age )
        <div class="col-md-10">
            Nome: {{ $age->age_nome }}
        </div>
        <div class="col-md-1">
            <a href={{ route('agenda.edit',['agenda' => $age->age_id]) }} type="button" class="btn btn-primary">Editar</a>
        </div>
        <div class="col-md-1">
            <a href={{ route('agenda.destroy',['agenda' => $age->age_id]) }} type="button" class="btn btn-danger">Excluir</a>

          
        </div>
        @endforeach
    </div>


</div>
@endsection