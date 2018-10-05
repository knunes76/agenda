@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <h3>Mostrando Agenda</h3>
        @php
        $linkEdit = route('agenda.edit',['agenda' => $agenda->id]);
        $linkDelete = route('agenda.destroy',['agenda' => $agenda->id]);
        @endphp   
        {!! 
            Button::primary(Icon::pencil().' Editar')->aslinkTo($linkEdit) 
        !!}
        {!! 
            Button::danger(Icon::create('remove').' Delete')->aslinkTo($linkDelete)
            ->addAttributes([
                'onClick' => "event.preventDefault();document.getElementById(\"form-delete\").submit()"
            ])
        !!}
        @php
            $formDelete = FormBuilder::plain([
                'id' => 'form-delete',
                'url' => $linkDelete,
                'method' => 'DELETE',
                'style' => 'display:none'
            ])
        @endphp
        {!! form($formDelete) !!}
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th scope='row'>#</th>
                <th scope='row'>{{$agenda->age_id}}</th>
            </tr>
            <tr>
                <th scope='row'>nome</th>
                <th scope='row'>{{$agenda->age_nome}}</th>
            </tr>
            <tr>
                <th scope='row'>Email</th>
                <th scope='row'>{{$agenda->age_email}}</th>
            </tr>   
            <tr>
                <th scope='row'>Fone</th>
                <th scope='row'>{{$agenda->age_fone}}</th>
            </tr>   
            </tbody>
        </table>
        
    </div>
</div>
@endsection