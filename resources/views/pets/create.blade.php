@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Pets</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-teal">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('pets.index') }}" class="text-teal">
                                Pets
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Create New Pet</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mb-2">
                    <a href="{{ route('pets.index') }}" class="btn btn-dark float-right">
                        <span class="fa fa-list"></span> Return to Pets' List
                    </a>
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-teal">
                        <div class="card-body">
                            <h5 class="text-center mt-4 mb-3"><b>New Pet Info Form</b></h5>

                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <form method="POST" action="{{ route('pets.store') }}">
                                        {{ csrf_field() }}
                                        @include('layouts.callouts.error')
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="id">ID No.</label>
                                                <input type="text" class="form-control bg-white" id="id"
                                                    name="id" value="{{ $petID }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    name="name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="name">Gender</label>
                                                <span class="float-right">
                                                    <div
                                                        class="custom-control custom-switch custom-switch-off-default custom-switch-on-teal">
                                                        <input type='hidden' value='0' name='is_active'>
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch3" value="1" name="is_active" checked>
                                                        <label class="custom-control-label"
                                                            for="customSwitch3">Active</label>
                                                    </div>
                                                </span>
                                                <select class="form-control select2 select2-teal"
                                                    data-dropdown-css-class="select2-teal" id="gender" name="gender"
                                                    style="width: 100%;">
                                                    <option value="" disabled selected>Select here ...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                {{-- @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="email">Type</label>
                                                <select class="form-control select2 select2-teal"
                                                    data-dropdown-css-class="select2-teal" name="type_id"
                                                    style="width: 100%;">
                                                    <option value="" disabled selected>Select here ...</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                                                    @endforeach
                                                </select>
                                                {{-- @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                            <div class="col-md-6">
                                                <label for="mobileNumber">Breed</label>
                                                <select class="form-control select2 select2-teal"
                                                    data-dropdown-css-class="select2-teal" style="width: 100%;">
                                                    <option value="" disabled selected>Select here ...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                {{-- @error('mobile_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Notes</label>
                                            <textarea class="form-control" rows="2" placeholder="Type here ..." name="notes" spellcheck="false"></textarea>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="birthdate">Birthdate</label>
                                                <input type="text"
                                                    class="form-control @error('birthdate') is-invalid @enderror"
                                                    id="birthdate" name="birthdate">
                                                @error('birthdate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-8">
                                                <label for="zipCode">Owner</label>
                                                <select class="form-control select2 select2-teal"
                                                    data-dropdown-css-class="select2-teal" style="width: 100%;">
                                                    <option value="" disabled selected>Select here ...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                {{-- @error('zip_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                        </div>
                                        <div class="float-right mb-5">
                                            <button type="button" class="btn btn-default mr-2"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn bg-teal">
                                                <span class="fas fa-save"></span> Save Changes
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
    <script>
        $(function() {




        })
    </script>
    @include('layouts.toaster.success')
    @include('layouts.toaster.error')
@endsection
