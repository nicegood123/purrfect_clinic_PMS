<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                {{-- <form method="POST" action="{{ route('owners.store') }}"> --}}
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5 class="text-center mb-3"><b>New Owner</b></h5>
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="password" class="form-control" id="id" readonly>
                    </div>

                    <div class="float-right mt-4 mb-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn bg-barn-red">
                            <span class="fas fa-save"></span> Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
