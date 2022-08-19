@if (session('errorMessage'))
    <div class="callout callout-danger">
        <p>{{ session('errorMessage') }}</p>
    </div>
@endif

