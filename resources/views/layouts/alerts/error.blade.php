@if (session('alert-error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="icon fas fa-ban"></span>
        {{ session('alert-error') }}
    </div>
@endif
