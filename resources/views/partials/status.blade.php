@if (session('status'))
    <div class="alert alert-primary alert-dismissible fade show">
        {{ session('status') }}
        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close">
        </button>
    </div>
@endif



