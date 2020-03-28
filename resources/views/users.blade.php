@extends('layouts.app')
@section('title', 'Manage Users')
@push('css_before')
    <link rel="stylesheet" href="{{ asset('/js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endpush
@section('content')
    <div class="content">
        <h2 class="content-heading">Manage Users</h2>
        <!-- Dynamic Table Full Pagination -->
        {{$dataTable->table()}}
        <!-- END Dynamic Table Full Pagination -->
    </div>

    @include('partials/modals/user/create')
    @include('partials/modals/user/show')
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush
