<div id="info-{{ $pet->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body mb-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="text-center mt-3 mb-3"><b>Pet Info</b></h5>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="id">ID No.</label>
                        <input type="text" class="form-control" id="id" value="{{ $pet->id }}" readonly>
                    </div>
                    <div class="col-md-9">
                        <label for="name">Name</label>
                        <span class="float-right">
                            <label for="addIsActive">
                                <span
                                    class="fa fa-circle {{ $pet->is_active == 1 ? 'text-teal' : 'text-muted' }}"></span>
                                Active
                            </label>
                        </span>
                        <input type="text" class="form-control" id="name" value="{{ $pet->name }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" value="{{ $pet->gender }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="birthdate">Birthdate</label>
                        <input type="text" class="form-control" id="birthdate"
                            value="{{ $pet->birthdate }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" value="{{ $pet->type }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="breed">Breed</label>
                        <input type="text" class="form-control" id="breed" value="{{ $pet->breed }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea class="form-control" rows="2" id="notes" readonly>{{ $pet->notes }}</textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="owner">Owner</label>
                        <input type="text" class="form-control" id="owner" value="{{ $pet->owner_name }}"
                            readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
