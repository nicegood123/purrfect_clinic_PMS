<div id="delete-{{ $type->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <h6>
                    <b>Delete Confirmation</b>
                </h6>
                <p class="text-center">
                    Are you sure you want to delete
                    <b>{{ $type->type }}</b>
                    from the list of types?
                </p>
                <div class="float-right">
                    <button type="button" class="btn btn-default mr-2" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="{{ route('types.delete', $type->id) }}">
                        <span class="fa fa-trash"></span>
                        Delete
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
