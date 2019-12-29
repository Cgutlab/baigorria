<!DOCTYPE html>

<html lang="es">

<head>
    @include('privada.template.metas')
    @include('privada.template.links')
</head>

<body>
    @include('privada.template.header')


    <div style="background: #00446F;">
        <section style="background-image: url('{{asset('img/banner/'.$banner->imagen)}}'); background-repeat: no-repeat; background-size: cover; ">
            <div class="container" style="width:100%;">
                <div class="row">
                    <div class="col s12" style="padding: 70px;">
                        <div class="fc1 fs20">{!!$banner->{'titulo_'.$idioma}!!}</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @foreach($contenido as $contenido)
    @if(Auth()->user()->contenido_mostrar == $contenido->orden)
        <section class="destacados mt15 mb15" style="margin-top: 80px; margin-bottom: 80px;">
            <div class="container mt15" style="width: 82%;">{{-- 80 --}}
                <div class="row center-align">
                    <img src="{{asset('img/contenidos/'.$contenido->imagen)}}" style="">
                </div>
                <div class="row center-align">
                    <div class="fcAzul2 fs24 fw5 mt15">{!!$contenido->{'titulo_'.$idioma}!!}</div>
                </div>
                <div class="row center-align">
                    <div class="fcAzul2 fs20 fw4">{!!$contenido->{'subtitulo_'.$idioma}!!}</div>
                </div>
                <div class="row">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <div class="fs17 fw4 fcGris1 mt15" style="width: 70%;">{!!$contenido->{'texto_'.$idioma}!!}</div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @endforeach

        @include('privada.template.footer')
</body>

</html>

@include('privada.template.scripts')

<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>