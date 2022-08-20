<div id="info-{{ $owner->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('owners.update', $owner->id) }}">
                {{ csrf_field() }}
                <div class="modal-body mb-5">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h5 class="text-center mt-3 mb-3"><b>Pet Owner Info</b></h5>
                    @include('layouts.callouts.error')
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="id">ID No.</label>
                            <input type="text" class="form-control bg-white" id="id" name="id"
                                value="{{ $owner->id }}" readonly>
                        </div>
                        <div class="col-md-9">
                            <label for="name">Name</label>
                            <span class="float-right">


                                <label for="addIsActive">
                                    <span
                                        class="fa fa-circle {{ $owner->is_active == 1 ? 'text-teal' : 'text-muted' }}"></span>
                                    Active
                                </label>
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
                            <input type="text" class="form-control @error('mobile_number') is-invalid @enderror"
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
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            name="address" value="{{ $owner->address }}">
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
                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror"
                                id="zipCode" name="zip_code" value="{{ $owner->zip_code }}">
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
