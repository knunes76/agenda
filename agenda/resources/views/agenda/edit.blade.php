@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <h3>Editar usuário</h3>
        {!! 
            form($form->add('Editar','submit',
            [
            'attr' => ['class' => 'btn btn-primary btn-block'],
            'label' => 'Atualizar'
            ])) 
        !!}
        
    </div>
</div>
@endsection