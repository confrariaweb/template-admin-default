@extends('templateAdminDefault::layouts.app')

@section('title', 'Contas')

@push('styles')
<link href="{{ asset('vendor/template-admin-default/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/template-admin-default/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/template-admin-default/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
$(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>
@endpush

@section('content-actions')
<a href="{{ route('admin.accounts.create') }}" class="btn btn-sm btn-primary shadow-sm float-right">
    <i class="fas fa-plus-circle fa-sm text-white-50"></i> Adicionar
</a>
@endsection

@section('content')
<p class="mb-4">
    Listagem com todas as contas cadastradas no sistema.
</p>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de contas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Dono da conta</th>
                        <th>Criado em</th>
                        <th>Ultima atualização</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Dono da conta</th>
                        <th>Criado em</th>
                        <th>Ultima atualização</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($accounts as $account)
                    <tr>
                        <td>{{ $account->user->name }}</td>
                        <td>{{ $account->created_at }}</td>
                        <td>{{ $account->updated_at }}</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Templates">
                                <a href="{{ route('admin.accounts.show', $account->id) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('admin.accounts.edit', $account->id) }}" class="btn btn-secondary">Editar</a>
                                <a href="{{ route('admin.accounts.destroy', $account->id) }}" class="btn btn-danger">Deletar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection