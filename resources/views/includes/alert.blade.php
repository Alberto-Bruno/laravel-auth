@if (session('message'))
    <div class="{{ sesssion('type' ?? 'info') }} alert alert-danger mt-3">
        {{ session('message') }}
    </div>
@endif
