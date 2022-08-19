<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('owners.store') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5 class="text-center mt-3 mb-3"><b>Create New Owner</b></h5>
                    @include('layouts.callouts.error')
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="id">ID No.</label>
                            <input type="text" class="form-control bg-white" id="id" name="id"
                                value="{{ $ownerID }}" readonly>
                        </div>
                        <div class="col-md-9">
                            <label for="name">Name</label>
                            <span class="float-right">
                                <input class="custom-control-input custom-control-input-teal" type="checkbox"
                                    id="addIsActive" name="is_active" value="1" checked>
                                <label for="addIsActive" class="custom-control-label">Active</label>
                            </span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">
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
                                id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="mobileNumber">Mobile No.</label>
                            <input type="text" class="form-control @error('mobile_number') is-invalid @enderror"
                                id="mobileNumber" name="mobile_number" value="{{ old('mobile_number') }}">
                            @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
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
                            <input type="text" class="form-control @error('city') is-invalid @enderror"
                                id="city" name="city" value="{{ old('city') }}">
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="zipCode">Zip Code</label>
                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror"
                                id="zipCode" name="zip_code" value="{{ old('zip_code') }}">
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="float-right mb-3">
                        <button type="button" class="btn btn-default mr-2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn bg-teal">
                            <span class="fas fa-save"></span> Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
