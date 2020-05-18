@extends('templateAdminDefault::layouts.app')

@section('title', 'Templates')

@section('content-actions')
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus-circle fa-sm text-white-50"></i> Adicionar
</a>
@endsection

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

@section('content')
<p class="mb-4">
    Listagem com todos os templates disponíveis.
</p>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de templates</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Status</th>
                        <th>Desenvolvedor</th>
                        <th>Criado em</th>
                        <th>Ultima atualização</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Titulo</th>
                        <th>Status</th>
                        <th>Desenvolvedor</th>
                        <th>Criado em</th>
                        <th>Ultima atualização</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($templates as $template)
                    <tr>
                        <td>{{ $template->title }}</td>
                        <td>{{ $template->status }}</td>
                        <td>{{ $template->user->name }}</td>
                        <td>{{ $template->created_at }}</td>
                        <td>{{ $template->updated_at }}</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary">Ver</button>
                                <button type="button" class="btn btn-secondary">Editar</button>
                                <button type="button" class="btn btn-danger">Deletar</button>
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