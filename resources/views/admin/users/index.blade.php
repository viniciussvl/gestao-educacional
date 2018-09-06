@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Listagem de usuários</h3>

        <div class="row">
            {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>

        <div class="row">
            {!!
            Table::withContents($users->items())
            ->bordered()
            ->callback('Ações', function($field, $model){
                $linkEdit = route('admin.users.edit', ['user' => $model->id]);
                $linkShow = route('admin.users.show', ['user' => $model->id]);
                return Button::link('Editar')->asLinkTo($linkEdit).'|'.
                Button::link('Ver')->asLinkTo($linkShow);
            })
            !!}

            {!! $users->links() !!}
        </div>
    </div>
@endsection
