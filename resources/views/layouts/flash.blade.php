<!-- flash message -->
@if($flash = session('message'))
    <div class="alert alert-success flash-message" role="alert">
        {{ $flash }}
    </div>
@endif