@extends('core.app')

@section('titulo', 'Base de conhecimento')

@section('content')

<migalha titulo="Base de conhecimento" descricao="Exportações disponíveis"></migalha>

<section class="content" id="app_base_de_conhecimento">

    <vc-exportar can="{{ json_encode($can) }}"></vc-exportar>

</section>

<script>
    var _migalhas = <?=json_encode($migalhas);?>; 
</script>

@push('css')
@endpush


@push('scripts')
    <!-- VUE.JS -->
    <script src="{{ asset ('/js/base_de_conhecimento.js') }}"></script>
@endpush

@endsection
