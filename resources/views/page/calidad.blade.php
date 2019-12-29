<!DOCTYPE html>

<html lang="es">

<head>
    @include('page.template.metas')
    @include('page.template.links')
</head>

<body>
    @include('page.template.header')

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

    <div class="container" style="width:100%;">
        <div class="row center-align mt15">
            <div class="fcAzul2 fs26 fw5">{!!$contenido1->{'titulo_'.$idioma}!!}</div>
            <div class="container fcGris2 fs20 fw4" style="width: 40%;">{!!$contenido1->{'texto_'.$idioma}!!}</div>
        </div>
        <div class="row mt15">
            <div class="col s12 l4">
                <div class="container">
                    <div class="calidadDestacado">{!!$destacado1->{'texto_'.$idioma}!!}</div>
                </div>
                <div class="container">
                    <div class="calidadDestacado">{!!$destacado3->{'texto_'.$idioma}!!}</div>
                </div>
            </div>
            <div class="col s12 l4 center-align">
                <img src="{{asset('img/contenidos/'.$contenido1->imagen)}}" style="">
            </div>
            <div class="col s12 l4">
                <div class="container">
                    <div class="calidadDestacado">{!!$destacado2->{'texto_'.$idioma}!!}</div>
                </div>
                <div class="container">
                    <div class="calidadDestacado">{!!$destacado4->{'texto_'.$idioma}!!}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="width:82%; margin-top: 35px;">
        <div class="row">
            <div class="col l6">
                <div class="fcGris1 fs17 fw4">{!!$contenido2->{'texto_'.$idioma}!!}</div>
            </div>
            <div class="col l6">
                <div class="fcAzul2 fs26 fw5 mt15">{!!$contenido2->{'titulo_'.$idioma}!!}</div>
                <div class="mt15"><img src="{{asset('img/contenidos/'.$contenido2->imagen)}}" style=""></div>
            </div>
        </div>
    </div>

    <div class="container" style="width: 82%;">
        <div class="row">
            @foreach($certificado as $certificados)
            <div class="col l6 mb15">
                <div class="calidadCertificado">
                    <div class="row">
                        <div class="col l10">
                            <div class="fw5">{!!$certificados->{'titulo_'.$idioma}!!}</div>
                            <div class="fw4">@lang('general.certificados')</div>
                        </div>
                        <div class="col l2 center-align" style="margin-top:10px;">
                            <a href="{!!'img/certificados/'.$certificados->ficha!!}" style="color: white;" target="_blank">
                              <i class="material-icons">file_download</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <section class="ziczac">
        <div style="background: #00446F;">
            <div class="container" style="width:82%;">
                @foreach($articulo as $articulos)
                @php $cont++
                @endphp
                @if($cont%2)
                <div class="row fs18">
                    <div class="col l6" style="padding-top:25px;">
                        <div class="fc7">{!!$articulos->{'titulo_'.$idioma}!!}</div>
                        <div class="fc1 fw7 fs28">{!!$articulos->{'subtitulo_'.$idioma}!!}</div>
                        <div class="fc1">{!!$articulos->{'texto_'.$idioma}!!}</div>
                        <br>
                    </div>
                    <div class="col l6 center-align">
                        <img class="responsive-img" src="{{asset('img/articulos/'.$articulos->imagen)}}">
                    </div>
                </div>
                @else
                <div class="row fs18">
                    <div class="col l6 right" style="padding-top:25px;">
                        <div class="fc7">{!!$articulos->{'titulo_'.$idioma}!!}</div>
                        <div class="fc1 fw7 fs28">{!!$articulos->{'subtitulo_'.$idioma}!!}</div>
                        <div class="fc1">{!!$articulos->{'texto_'.$idioma}!!}</div>
                        <br>
                    </div>
                    <div class="col l6 center-align">
                        <img class="responsive-img" src="{{asset('img/articulos/'.$articulos->imagen)}}">
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    @include('page.template.footer')
</body>

</html>

@include('page.template.scripts')

<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            selectYears: 200,
            min: new Date(2018, 11, 23),
            max: new Date(2080, 12, 31)
        });
    });

    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
