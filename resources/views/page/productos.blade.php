<!DOCTYPE html>

<html lang="es">

<head>
    @include('page.template.metas')
    @include('page.template.links')
</head>

<body>
    @include('page.template.header')

    <style media="screen">
        .noPadNS {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .colorCat {
            color: #454545;
        }

        .colorPro {
            color: #A3A3A3;
        }
    </style>

    <div class="container" style="width: 82%;">
        <div class="row">
            <div class="row"  style="margin-bottom: 50px; margin-top: 30px;">
            <div class="col l12" style="color: color: #595959!important; font-family: 'Monserrat';">
                <a href="{{route('categorias')}}" style="color: #595959!important;" class="fw5">Categorias</a>&nbsp;|&nbsp;
                <a href="{{route('productos', $item->id)}}" style="color: #595959!important;" class="fw5">{!!$item->{'titulo_'.$idioma}!!}</a>
            </div>
            </div>
            <div class="col l3">
                <ul class="collapsible z-depth-0" style="border: 0;">
                    @foreach($categorias as $categoria)
                    <li>
                        <div class="collapsible-header colorCat">
                            <div>{!!$categoria->{'titulo_'.$idioma} !!}</div>
                        </div>
                        <div class="collapsible-body noPadNS">
                            @foreach($productos as $producto)
                            @if($producto->id_categoria == $categoria->id)
                                <ul class="collapsible z-depth-0 noPadNS" style="border: 0;">
                                    <a class="colorPro" href="{{route('producto',$producto->id)}}">{!!$producto->{'titulo_'.$idioma} !!}</a>
                                </ul>
                                @endif
                                @endforeach
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col l9">
                @foreach($product as $producto)
                <div class="col s12 l4">
                    <div class="card z-depth-0">
                        <div class="card-image center-align">
                            <a href="{{route('producto', $producto->id)}}">
                                <div class="efecto">
                                    <span class="central"><i class="material-icons">add</i></span>
                                </div>
                                <div style="display: flex; justify-content: center; align-items: center;">
                                <div class="caption" style="position: absolute; z-index: 99; top: 25%;">
                                <img src="{{asset('img/copyright.png')}}" style="opacity: 0.5;">
                                </div>
                                </div>
                                <img src="{{asset('img/productos/'.$producto->imagen)}}" style="border: 1px solid #DDD; width: 100%; height: 100%;">
                            </a>
                        </div>
                        <div class="card-content cero center-align " style=" height: 100px; display:flex; justify-content: center; align-items:center;">
                            <div class=" fw5 fs16 gris13">{!!$producto->{'titulo_'.$idioma} !!}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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
