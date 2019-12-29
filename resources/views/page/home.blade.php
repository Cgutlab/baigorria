<!DOCTYPE html>

<html lang="es">

<head>
    @include('page.template.metas')
    @include('page.template.links')
</head>

<body>
    @include('page.template.header')
    @include('page.template.slider')

    <section class="destacados">
        <div class="container" style="width: 80%; margin-top: 50px;">{{-- 80 --}}
            <div class="row">
                @foreach($destacados as $destacado)
                <a href="{!!$destacado->ruta !!}">
                    <div class="col l4 m12">
                        <div class="card">
                            <div class="cuadradas card-image">
                                <img src="{{asset('img/destacados/'.$destacado->imagen)}}" style="">
                            </div>
                            <div class="card-title" style="width: 100%; padding: 25px;">
                                <div class="fcGr fw5 fs18" style="color: #595959;">
                                    {!!$destacado->{'titulo_'.$idioma} !!}
                                </div>
                                <div class="fcGc fw5 fs16" style="color: #A4A3A4;">
                                    {!!$destacado->{'texto_'.$idioma} !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </a>
                @endforeach

            </div>
        </div>
    </section>

    <section class="iconos">
        <div style="background: #00446F;">
            <div class="container" style="width:80%; margin-top: 50px; padding-top: 25px; padding-bottom: 25px;">
                <div class="row">
                    @foreach($iconos as $icono)
                    <div class="col l4 m12" style="display: flex; justify-content: center; align-items: center;">
                        <div class="row" style="display: flex; justify-content: center; align-items: center;">
                            <div class="col l4 m12">
                                <img src="{{asset('img/iconos/'.$icono->imagen)}}">
                            </div>
                            <div class="col l8 m12 fc1">
                                {!! $icono->{'titulo_'.$idioma} !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ziczac">
        <div class="container" style="width:82%;">
            <div class="row fs18">
                <div class="col l6" style="background: #00446F; padding: 50px;">
                    <div class="fc7">{!!$c1->{'titulo_'.$idioma} !!}</div>
                    <div class="fc1 fw7 fs28">{!!$c1->{'subtitulo_'.$idioma} !!}</div>
                    <div class="fc1">{!!$c1->{'texto_'.$idioma} !!}</div>
                    <br>
                </div>
                <div class="col l6 center-align">
                    <div style="margin-top: 50px;">
                        <img class="responsive-img" src="{{asset('img/contenidos/'.$c1->imagen)}}">
                    </div>
                </div>
            </div>

            <div class="row fs18">
                <div class="col l6 right" style="background: #00446F; padding: 50px;">
                    <div class="fc7">{!!$c2->{'titulo_'.$idioma} !!}</div>
                    <div class="fc1 fw7 fs28">{!!$c2->{'subtitulo_'.$idioma} !!}</div>
                    <div class="fc1">{!!$c2->{'texto_'.$idioma} !!}</div>
                    <br>
                </div>
                <div class="col l6 center-align">
                    <div style="margin-top: 50px;">
                        <img class="responsive-img" src="{{asset('img/contenidos/'.$c2->imagen)}}">
                    </div>
                </div>
            </div>

            <div class="row fs18">
                <div class="col l6" style="background: #00446F; padding: 50px;">
                    <div class="fc7">{!!$c3->{'titulo_'.$idioma} !!}</div>
                    <div class="fc1 fw7 fs28">{!!$c3->{'subtitulo_'.$idioma} !!}</div>
                    <div class="fc1">{!!$c3->{'texto_'.$idioma} !!}</div>
                    <br>
                </div>
                <div class="col l6 center-align">
                    <div style="">
                        <img class="responsive-img" src="{{asset('img/contenidos/'.$c3->imagen)}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="background: #00446F;">
        <div class="container" style="width: 100%;">
            <section style="background-image: url('{{asset('img/banner/'.$banner->imagen)}}'); background-repeat: no-repeat; background-size: cover; ">
                <div class="row">
                    <div class="col l6" style="padding: 70px;">
                        <div class="fc1 fs28">
                            @lang('general.youtube1')</div>
                            <div class="fc1 fs28">
                                @lang('general.youtube2')</div>
                                <div class="fc1 fs28"><i class="fab fa-youtube"></i></div>
                            </div>
                            <div class="col l4 hide-on-small-only" style="padding: 90px; margin-left: 30px;">
                                <iframe width="408" height="240" src="https://www.youtube.com/embed/{{$banner->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
            </section>
        </div>
    </div>

    @include('page.template.footer')
</body>

</html>

@include('page.template.scripts')

<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>