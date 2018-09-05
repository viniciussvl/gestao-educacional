@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Novo usuário</h3>

        <div class="row">
            {!!
            form($form->add('insert', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Adicionar usuário'
            ]))
            !!}
        </div>
    </div>
@endsection
