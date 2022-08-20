@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Owners</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/" class="text-teal">Home</a></li>
                        <li class="breadcrumb-item active">Owners</li>
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
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($owners as $owner)
                                        <tr>
                                            <td>{{ $owner->id }}</td>
                                            <td>{{ $owner->name }}</td>
                                            <td>{{ $owner->mobile_number }}</td>
                                            <td>{{ $owner->email }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#info-{{ $owner->id }}">
                                                    <span class="fas fa-info-circle"></span>
                                                </button>
                                                <a class="btn bg-orange btn-sm"
                                                    href="{{ route('owners.edit', $owner->id) }}">
                                                    <span class="fas fa-edit text-white"></span>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete-{{ $owner->id }}">
                                                    <span class="fas fa-trash"></span>
                                                </button>
                                            </td>
                                            @include('owners.modals.info')
                                            @include('owners.modals.delete')
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
