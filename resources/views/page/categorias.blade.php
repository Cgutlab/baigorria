<!DOCTYPE html>

<html lang="es">

<head>
    @include('page.template.metas')
    @include('page.template.links')
</head>

<body>
    @include('page.template.header')

    <div class="container" style="width: 82%; padding: 70px 0 70px 0;">
        <div class="row">
            @foreach($categorias as $categoria)
            <div class="col s12 m6 l4">
                <div class="card z-depth-0">
                    <div class="card-image center-align">
                        <a href="{{route('productos', $categoria->id)}}">
                            <div class="efecto">
                                <span class="central"><i class="material-icons">add</i></span>
                            </div>
                            <img src="{{asset('img/categorias/'.$categoria->imagen)}}" style="border: 1px solid #DDD; width: 100%; height: 100%;">
                        </a>
                    </div>
                    <div class="card-content cero center-align " style="border: none; height: 100px;">
                        <div class="fw6 fs20" style="color: #003E66;">{!!$categoria->{'titulo_'.$idioma} !!}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

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
