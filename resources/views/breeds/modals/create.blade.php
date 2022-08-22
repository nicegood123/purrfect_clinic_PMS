<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('breeds.store') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5 class="text-center mt-3 mb-3"><b>Create New Pet Breed</b></h5>
                    <div class="form-group">
                        <label for="breed">Breed Name</label>
                        <input type="text" class="form-control @error('breed') is-invalid @enderror" id="breed"
                            name="breed">
                        @error('breed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="2" placeholder="Type here ..." id="description" name="description"
                            spellcheck="false"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="breed">Type</label>
                        <select class="form-control select2 select2-teal" data-dropdown-css-class="select2-teal"
                            name="type_id" style="width: 100%;">
                            <option value="" disabled selected>Select here ...</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>
                        @error('type_id')
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
