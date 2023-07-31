@if(session()->has('success'))
    <div class="flash-success">
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif
