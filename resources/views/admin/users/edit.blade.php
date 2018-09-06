@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Editar usuário</h3>

        <div class="row">
            {!!
            form($form->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Editar'
            ]))
            !!}
        </div>
    </div>
@endsection
