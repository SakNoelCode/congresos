@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset('style/foundation/foundation.min.css')}}">
<link rel="stylesheet" href="{{asset('style/styleIncripciones.css')}}">
@endsection

@section('content')
<header>
    <div class="logo-header">
    </div>
</header>
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <section class="row container">

        <div class="item instrucciones small-12 large-12 columns">
            <p class="text-center">Lamentablemente las inscripciones se han cerrado. Gracias por tu interés!!!</p>
            <p class="text-center">Sin embargo te invitamos a seguir el evento en vivo vía Facebook Live (Búscanos como: untrm.sedebagua)</p>
            <p class="text-center">Te recordamos que estés atento a nuestros futuros eventos a través de nuestra web institucional o nuestro facepage (untrmbagua).</strong></p>

            <div class=" text-center">
                <a href="{{route('welcome.index')}}" class="button alert addButton">Regresar</a>
            </div>
        </div>


    </section>
</div>


@endsection


@push('scripts')
<script src="{{asset('lib/js/jquery.js')}}"></script>
<script src="{{asset('lib/js/foundation.min.js')}}"></script>
<script>
    $(document).foundation();
</script>

@endpush