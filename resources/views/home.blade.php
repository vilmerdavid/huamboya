@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Bienvenido') }}</div>

    <div class="card-body">
        <a href="" class="btn btn-primary">Slider</a>
        <a href="{{ route('documentosAdmin') }}" class="btn btn-secondary">Documentos</a>
        <a href="" class="btn btn-success">Comunidad</a>
        <a href="" class="btn btn-danger">Galería</a>
    </div>
</div>

<script>
    $('#m_inicio').addClass('m-active');
</script>
@endsection
