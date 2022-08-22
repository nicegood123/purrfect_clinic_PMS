<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('types.store') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5 class="text-center mt-3 mb-3"><b>Create New Pet Type</b></h5>
                    <div class="form-group">
                        <label for="breed">Type Name</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                            name="type">
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Type</label>
                        <textarea class="form-control" rows="2" placeholder="Type here ..." id="description" name="description"
                            spellcheck="false"></textarea>
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
