<div id="info-{{ $owner->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body mb-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="text-center mt-3 mb-3"><b>Pet Owner Info</b></h5>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="id">ID No.</label>
                        <input type="text" class="form-control" id="id" value="{{ $owner->id }}" readonly>
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
                        <input type="text" class="form-control" id="name" value="{{ $owner->name }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control" id="email" value="{{ $owner->email }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="mobileNumber">Mobile No.</label>
                        <input type="text" class="form-control" id="mobileNumber"
                            value="{{ $owner->mobile_number }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" value="{{ $owner->address }}" readonly>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" value="{{ $owner->city }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="zipCode">Zip Code</label>
                        <input type="text" class="form-control" id="zipCode" value="{{ $owner->zip_code }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
