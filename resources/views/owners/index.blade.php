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
                    <div class="card card-outline card-dark">
                        <div class="card-body">
                            <table id="owners" style="width:100%" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Email</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($feedbackSources as $feedbackSource)
                                        <tr>
                                            <td>{{ $feedbackSource->name }}</td>
                                            <td class="text-center">
                                                {{ Carbon\Carbon::parse($feedbackSource->created_at)->format('m-d-Y g:i A') }}
                                            </td>
                                            <td class="text-center">
                                                {{ Carbon\Carbon::parse($feedbackSource->updated_at)->format('m-d-Y g:i A') }}
                                            </td>
                                            @if (Auth::user()->user_type == 3)
                                                <td class="text-center">
                                                    <button type="button" class="btn bg-orange btn-sm" data-toggle="modal"
                                                        data-target="#edit-{{ $feedbackSource->id }}">
                                                        <span class="fas fa-edit text-white"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete-{{ $feedbackSource->id }}">
                                                        <span class="fas fa-trash"></span>
                                                    </button>
                                                </td>
                                                @include('feedback_sources.modals.edit')
                                                @include('feedback_sources.modals.delete')
                                            @endif
                                        </tr>
                                    @endforeach --}}
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
    @include('layouts.partials.alerts.success')
    @include('layouts.partials.alerts.error')
@endsection
