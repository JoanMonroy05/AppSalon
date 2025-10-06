{{-- Errores --}}
@if ($errors->any() || session('error'))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

{{-- Éxito --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Mensajes generales --}}
@if (session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif
