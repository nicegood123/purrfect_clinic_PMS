<div id="edit-{{ $owner->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('owners.update', $owner->id) }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5 class="text-center mb-3"><b>Edit Owner</b></h5>

                    <label for="name">
                        Name
                        <span style="color:red;">*</span>
                    </label>
                    <input class="form-control" type="text" name="name" value="{{ $owner->name }}">

                    <div class="float-right mt-4">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn bg-teal">
                            <span class="fas fa-save"></span>
                            Save Changes
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
