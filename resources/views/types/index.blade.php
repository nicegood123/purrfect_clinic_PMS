@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pet Types</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/" class="text-teal">Home</a></li>
                        <li class="breadcrumb-item active">Pet Types</li>
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
                            <table id="owners" style="width:100%" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Breed</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        <tr>
                                            <td>{{ $type->id }}</td>
                                            <td>{{ $type->type }}</td>
                                            <td>{{ $type->breed }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#info-{{ $type->id }}">
                                                    <span class="fas fa-info-circle"></span>
                                                </button>
                                                <a class="btn bg-orange btn-sm" href="{{ route('types.edit', $type->id) }}">
                                                    <span class="fas fa-edit text-white"></span>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete-{{ $type->id }}">
                                                    <span class="fas fa-trash"></span>
                                                </button>
                                            </td>
                                            {{-- @include('types.modals.info') --}}
                                            {{-- @include('types.modals.delete') --}}
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
    @include('owners.modals.create')
@endsection

@section('scripts')
    <script>
        $(function() {
            $("#owners").DataTable({
                "responsive": true,
                "order": [
                    [1, "desc"]
                ],
            });
        });
    </script>
    @include('layouts.toaster.success')
    @include('layouts.toaster.error')
@endsection
