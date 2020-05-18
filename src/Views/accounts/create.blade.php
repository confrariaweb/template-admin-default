@extends('templateAdminDefault::layouts.app')

@section('title', 'Contas')

@section('content-actions')
<a href="#" class="btn btn-sm btn-secondary shadow-sm float-right">
    <i class="fas fa-plus-circle fa-sm text-white-50"></i> Cancelar
</a>
<a href="#" class="btn btn-sm btn-primary shadow-sm float-right">
    <i class="fas fa-plus-circle fa-sm text-white-50"></i> Salvar
</a>
@endsection

@section('content')
<p class="mb-4">
    Todos os campos são necessários para criar uma nova conta.
</p>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Criar nova conta</h6>
    </div>
    <div class="card-body">
        {!! Form::open(['route' => 'admin.accounts.store']) !!}
        @include('templateAdminDefault::accounts.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection