@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Owners</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-teal">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('owners.index') }}" class="text-teal">
                                Owners
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Create New Owner</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mb-2">
                    <a href="{{ route('owners.index') }}" class="btn btn-dark float-right">
                        <span class="fa fa-list"></span> Return to Owners' List
                    </a>
                </div>
                <div class="col-sm-12">
                    @include('layouts.alerts.error')
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-teal">
                        <div class="card-body">
                            <h5 class="text-center mt-3 mb-3"><b>Create New Owner</b></h5>
                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <form method="POST" action="{{ route('owners.store') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="id">ID No.</label>
                                                <input type="text" class="form-control bg-white" id="id"
                                                    name="id" value="{{ $ownerID }}" readonly>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="name">Name</label>
                                                <span class="float-right">
                                                    <div
                                                        class="custom-control custom-switch custom-switch-off-default custom-switch-on-teal">
                                                        <input type='hidden' value='0' name='is_active'>
                                                        <input type="checkbox" class="custom-control-input" id="addIsActive"
                                                            value="1" name="is_active" checked>
                                                        <label class="custom-control-label" for="addIsActive">Active</label>
                                                    </div>
                                                </span>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <label for="email">Email Address</label>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="mobileNumber">Mobile No.</label>
                                                <input type="text"
                                                    class="form-control @error('mobile_number') is-invalid @enderror"
                                                    id="mobileNumber" name="mobile_number"
                                                    value="{{ old('mobile_number') }}">
                                                @error('mobile_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text"
                                                class="form-control @error('address') is-invalid @enderror" id="address"
                                                name="address" value="{{ old('address') }}">
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <label for="city">City</label>
                                                <input type="text"
                                                    class="form-control @error('city') is-invalid @enderror" id="city"
                                                    name="city" value="{{ old('city') }}">
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="zipCode">Zip Code</label>
                                                <input type="text"
                                                    class="form-control @error('zip_code') is-invalid @enderror"
                                                    id="zipCode" name="zip_code" value="{{ old('zip_code') }}">
                                                @error('zip_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="float-right mb-3">
                                            <button type="button" class="btn btn-default mr-2"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn bg-teal">
                                                <span class="fas fa-save"></span> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @include('layouts.toaster.success')
    @include('layouts.toaster.error')
@endsection
