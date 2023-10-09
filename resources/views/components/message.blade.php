@if (session('errorMessage'))
    <div class="alert alert-danger">
        {{ session('errorMessage') }}
    </div>
@elseif (session('successMessage'))
    <div class="alert alert-success">
        {{ session('successMessage') }}
    </div>
@endif