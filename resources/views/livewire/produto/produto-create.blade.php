<div class="container">
    <div class="mt-5">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-center vh-100" style="">

        </div>
    </div>
</div>