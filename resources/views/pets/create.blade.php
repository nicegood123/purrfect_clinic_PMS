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
                                                    name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 @error('gender') is-invalid @enderror">
                                                <label for="gender">Gender</label>
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
                                                <select
                                                    class="form-control @error('gender') is-invalid @enderror select2 select2-teal"
                                                    data-dropdown-css-class="select2-teal" id="gender" name="gender"
                                                    style="width: 100%;">
                                                    <option disabled selected>Select here ...</option>
                                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                                        Male</option>
                                                    <option value="Female"
                                                        {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="birthdate">Birthdate</label>
                                                <div class="input-group date" id="birthdate" data-target-input="nearest">
                                                    <input type="text" name="birthdate"
                                                        class="form-control datetimepicker-input @error('birthdate') is-invalid @enderror"
                                                        data-target="#birthdate" id="birthdate"
                                                        value="{{ old('birthdate') }}">
                                                    <div class="input-group-append" data-target="#birthdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    @error('birthdate')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 @error('breed_id') is-invalid @enderror">
                                                <label for="breed">Breed</label>
                                                <select
                                                    class="form-control select2 select2-teal @error('breed_id') is-invalid @enderror"
                                                    name="breed_id" data-dropdown-css-class="select2-teal" id="breed"
                                                    style="width: 100%;">
                                                    <option disabled selected>Select here ...</option>
                                                    @foreach ($breeds as $breed)
                                                        <option value="{{ $breed->id }}"
                                                            {{ old('breed_id') == $breed->id ? 'selected' : '' }}>
                                                            {{ $breed->breed }}</option>
                                                    @endforeach
                                                </select>
                                                @error('breed_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="notes">Notes</label>
                                            <textarea class="form-control @error('notes') is-invalid @enderror" rows="2" placeholder="Type here ..."
                                                name="notes" id="notes" spellcheck="false">{{ old('notes') }}</textarea>
                                            @error('notes')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row @error('owner_id') is-invalid @enderror">
                                            <div class="col-md-12">
                                                <label for="owner">Owner</label>
                                                <select
                                                    class="form-control @error('owner_id') is-invalid @enderror select2 select2-teal"
                                                    name="owner_id" id="owner" data-dropdown-css-class="select2-teal"
                                                    style="width: 100%;">
                                                    <option disabled selected>Select here ...</option>
                                                    @foreach ($owners as $owner)
                                                        <option value="{{ $owner->id }}"
                                                            {{ old('owner_id') == $owner->id ? 'selected' : '' }}>
                                                            {{ $owner->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('owner_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
            // Birthdate Date Picker
            $('#birthdate').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        })
    </script>
    @include('layouts.toaster.success')
    @include('layouts.toaster.error')
@endsection
