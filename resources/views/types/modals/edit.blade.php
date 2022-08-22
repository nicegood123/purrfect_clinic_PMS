<div id="edit-{{ $type->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('types.update', $type->id) }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5 class="text-center mt-3 mb-3"><b>Edit Pet Type Info</b></h5>
                    <div class="form-group">
                        <label for="type">Type Name</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                            name="type" value="{{ $type->type }}">
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description" value="{{ $type->description }}">
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
