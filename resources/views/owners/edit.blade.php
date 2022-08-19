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
                        <li class="breadcrumb-item active">Edit Owner's Info</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="{{ route('owners.index') }}" class="btn btn-dark float-right">
                        <span class="fa fa-list"></span> Return to Owners' List
                    </a>
                </div>
                <div class="col-12">
                    <div class="card card-outline card-dark">
                        <div class="card-body">
                            <form method="POST" action="{{ route('owners.update', $owner->id) }}">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <h5 class="text-center mt-3 mb-3"><b>Edit Owner Info</b></h5>
                                    @include('layouts.callouts.error')
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="id">ID No.</label>
                                            <input type="text" class="form-control bg-white" id="id"
                                                name="id" value="{{ $owner->id }}" readonly>
                                        </div>
                                        <div class="col-md-9">
                                            <label for="name">Name</label>
                                            <span class="float-right">
                                                <input class="custom-control-input custom-control-input-teal"
                                                    type="checkbox" id="addIsActive" name="is_active" value="1"
                                                    {{ $owner->is_active == 1 ? 'checked' : '' }}>
                                                <label for="addIsActive" class="custom-control-label">Active</label>
                                            </span>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ $owner->name }}">
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
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ $owner->email }}">
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
                                                id="mobileNumber" name="mobile_number" value="{{ $owner->mobile_number }}">
                                            @error('mobile_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            id="address" name="address" value="{{ $owner->address }}">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control @error('city') is-invalid @enderror"
                                                id="city" name="city" value="{{ $owner->city }}">
                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="zipCode">Zip Code</label>
                                            <input type="text"
                                                class="form-control @error('zip_code') is-invalid @enderror" id="zipCode"
                                                name="zip_code" value="{{ $owner->zip_code }}">
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
                                            <span class="fas fa-save"></span> Save Changes
                                        </button>
                                    </div>
                                </div>
                            </form>
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
