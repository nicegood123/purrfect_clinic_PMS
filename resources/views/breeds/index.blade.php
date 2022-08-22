@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Breeds</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/" class="text-teal">Home</a></li>
                        <li class="breadcrumb-item active">Breeds</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-3">
                    <a class="btn btn-dark float-right" data-toggle="modal" data-target="#add">
                        <span class="fa fa-plus"></span> Create New
                    </a>
                </div>
                <div class="col-12">
                    <div class="card card-outline card-teal">
                        <div class="card-body">
                            <table id="breeds" style="width:100%" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Breed</th>
                                        <th>type</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($breeds as $breed)
                                        <tr>
                                            <td>{{ $breed->id }}</td>
                                            <td>{{ $breed->breed }}</td>
                                            <td>{{ $breed->type }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn bg-orange btn-sm" data-toggle="modal"
                                                    data-target="#edit-{{ $breed->id }}">
                                                    <span class="fas fa-edit text-white"></span>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete-{{ $breed->id }}">
                                                    <span class="fas fa-trash"></span>
                                                </button>
                                            </td>
                                            @include('breeds.modals.edit')
                                            @include('breeds.modals.delete')
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modals')
    @include('breeds.modals.create')
@endsection

@section('scripts')
    <script>
        $(function() {
            $("#breeds").DataTable({
                "responsive": true,
                "order": [
                    [1, "desc"]
                ],
            });
        });

        $(document).ready(function() {

            $('#type_id').select2({
                theme: 'bootstrap'
            });

            $("#type_id + span").addClass("is-invalid");

        });
    </script>
    @include('layouts.toaster.success')
    @include('layouts.toaster.error')
@endsection
