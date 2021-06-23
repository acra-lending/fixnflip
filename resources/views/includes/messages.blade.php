@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-light bg-danger mt-3 pt-3 text-white">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success bg-primary mt-3 pt-3 text-white">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-light bg-danger mt-3 pt-3 text-white">
        {{ session('error') }}
    </div>
@endif