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

    <section class="destacados mt15 mb15">
        <div class="container mt15" style="width: 82%;">{{-- 80 --}}
            <div class="row center-align">

<?php /*
                <div class="col s12">
                    <div id="visitor"></div>
                    <?= $lava->render("GeoChart","Popularity","visitor"); ?>
                </div>
*/ ?>               

                <img src="{{asset('img/contenidos/'.$contenido->imagen)}}" style="">
            </div>
            <div class="row center-align">
                <div class="fcAzul2 fs24 fw5 mt15">{!!$contenido->{'titulo_'.$idioma}!!}</div>
            </div>
            <div class="row center-align">
                <div class="fcAzul2 fs20 fw4">{!!$contenido->{'subtitulo_'.$idioma}!!}</div>
            </div>
            <div class="row">
                <div class="col l6">
                    <div class="fs17 fw4 fcGris1 mt15">{!!$contenido->{'texto_'.$idioma}!!}</div>
                </div>
                <div class="col l6">
                    <div class="fs17 fw4 fcAzul2 mt15">{!!$contenido->{'texto2_'.$idioma}!!}</div>

                </div>
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