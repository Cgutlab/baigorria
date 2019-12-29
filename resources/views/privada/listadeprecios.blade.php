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

    <div class="row" style=" margin-bottom: 80px;">
        <div class="container center-align" style="width:100%;">
            @forelse($lista as $listas)
            <div class="row" style="margin-top: 40px;">
                <div style="margin-bottom: 15px;"><img src="{{asset('img/listadeprecios/'.$listas->imagen)}}" alt=""></div>
                <div style="display: flex; justify-content: center; ">
                    <div>
                        <a href="{{route('reporte')}}" target="_blank">
                            <span><i class="material-icons" style="color:black;">file_download</i></span>
                            <span style="color: black; font-size: 18px;">&nbsp;Descargar</span>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <h2>Sin registros</h2>
            @endforelse
        </div>
    </div>

    @include('privada.template.footer')
</body>

</html>

@include('privada.template.scripts')

<script>
    $("[name='record']").on("change", function(e) {
        let edit_id = $(this).val();
        window.location.href = edit_id;
    });

    $(document).ready(function() {
        $('select').formSelect();
    });
</script>