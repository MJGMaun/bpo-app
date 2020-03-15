@extends('layouts.app')
@section('title', ' Manage Users')
@section('css_before')
    <link rel="stylesheet" href="{{ asset('/js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
    <div class="content">
        <h2 class="content-heading">Manage Users</h2>
        <!-- Dynamic Table Full Pagination -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">User <small>List</small></h3>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-large"><i class="fa fa-plus"></i> User</button>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter data-table">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Role</th>
                            <th class="text-center" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                        {{-- @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->index + 1}}</td>
                                <td class="font-w600">{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge {{ $user->role->id === 1 ? 'badge-warning' : ($user->role->id === 2 ? 'badge-success' : 'badge-info') }}">{{  $user->role->name  }}</span>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                        <i class="fa fa-user"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach --}}
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full Pagination -->
    </div>

    @include('partials/modals/user/create')
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>
    <script>
         $(function () {

    var table = $('.data-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ url('api/users/list') }}",
        "columns": [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'first_name', name: 'name'},
            {data: 'first_name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

  });
    </script>
@endsection
