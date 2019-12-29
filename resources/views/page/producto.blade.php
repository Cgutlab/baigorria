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
                <a href="{{route('productos', $productoIs->categorias->id)}}" style="color: #595959!important;" class="fw5">{!!$productoIs->categorias->{'titulo_'.$idioma}!!}</a>&nbsp;|&nbsp;
                <a href="{{route('producto', $productoIs->id)}}" style="color: #595959!important;" class="fw5">{!!$productoIs->{'titulo_'.$idioma}!!}</a>
            </div>
            </div>
            <div class="col l3 s12">
                <ul class="collapsible z-depth-0" style="border: 0;">
                    @foreach($categorias as $categoria)
                    <li class="@if($productoIs->id_categoria == $categoria->id) active @endif">
                        <div class="collapsible-header colorCat">
                            <div class="active" style="@if($productoIs->id_categoria == $categoria->id) color: #003E66!important; font-weight: 600; @endif">{!!$categoria->{'titulo_'.$idioma} !!}</div>
                        </div>
                        <div class="collapsible-body noPadNS active">
                            @foreach($productos as $producto)
                            @if($producto->id_categoria == $categoria->id)
                                <ul class="collapsible z-depth-0 noPadNS" style="border: 0;">
                                    <a class="colorPro" style="@if($productoIs->id == $producto->id) color: #003E66!important; font-weight: 600;  @endif" href="{{route('producto',$producto->id)}}">{!!$producto->{'titulo_'.$idioma} !!}</a>
                                </ul>
                                @endif
                                @endforeach
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col l9 s12">

                <div class="col l6 s12">
                  <div class="slider">
                    <ul class="slides">
                    @if($productoIs->imagen)
                        <li><img src="{{asset('img/productos/'.$productoIs->imagen)}}" style="width:100%;"></li>
                    @endif
                    @foreach($presentacion as $presentaciones)
                        @if($presentaciones->imagen1)
                        <li><img src="{{asset('img/presentaciones/'.$presentaciones->imagen1)}}" style="width:100%;"></li>
                        @endif
                        @if($presentaciones->imagen2)
                        <li><img src="{{asset('img/presentaciones/'.$presentaciones->imagen2)}}" style="width:100%;"></li>
                        @endif
                        @if($presentaciones->imagen3)
                        <li><img src="{{asset('img/presentaciones/'.$presentaciones->imagen3)}}" style="width:100%;"></li>
                        @endif
                        @if($presentaciones->imagen4)
                        <li><img src="{{asset('img/presentaciones/'.$presentaciones->imagen4)}}" style="width:100%;"></li>
                        @endif
                    @endforeach
                        <div class="caption" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{asset('img/copyright.png')}}" style="position: absolute; z-index: 99; top: 30%; opacity: 0.5;">
                        </div>
                    </ul>
                  </div>
                </div>

                <div class="col s12 l6">
                    <div class="fcGris2 fs28 fw6">{!!$productoIs->{'titulo_'.$idioma}!!}</div>
                    <div class="lineaHorizontal"></div>
                    <div class="fcGris2 fs17 fw4">{!!$productoIs->{'texto_'.$idioma}!!}</div>
                    @if($productoIs->plano)
                    <div><img src="{!!asset('img/planos/'.$productoIs->plano)!!}"></div>
                    @endif
                    <div style="margin-top: 20px;"><a class="boton" href="#">@lang('general.consultar')</a></div>
                </div>

<style>
.bordered tr{
    border: 1px solid #CCCCCC;
}
.bordered td{
    border: 1px solid #CCCCCC;
}
.bordered thead tr td{
    border-bottom: 1px solid #333333;
}
</style>

                <div class="col s12 mt15 fs12">
                    <div class="fcAzul2 fs20 fw5">@lang('general.detalles')</div>
                    <div class="lineaHorizontal"></div>
                    <div class="" style="margin-top: 35px;">
                        <table class="responsive-table highlight centered striped bordered">
                            <thead>
                                <tr class="fcAzul2 fw5">
                                    <td style="width: 90px;text-align: center;">@lang('general.tabla_code')</td>
                                    <td style="text-align: center;">@lang('general.tabla_text')</td>
                                    <td style="text-align: center;">@lang('general.tabla_aaaa')</td>
                                    <td style="text-align: center;">@lang('general.tabla_bbbb')</td>
                                    <td style="text-align: center;">@lang('general.tabla_cccc')</td>
                                    <td style="text-align: center;">@lang('general.tabla_dddd')</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($presentacion as $detalles)
                                <tr>
                                    <td style="text-align: left;">{{$detalles->codigo}}</td>
                                    <td style="text-align: left;">{!!$detalles->{'titulo_'.$idioma} !!}</td>
                                    <td>{{$detalles->medida_a}}</td>
                                    <td>{{$detalles->medida_b}}</td>
                                    <td>{{$detalles->medida_c}}</td>
                                    <td>{{$detalles->terminacion}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col s12 mt15" style="margin-top: 35px; margin-bottom: 50px;">
                    <div class="fcAzul2 fs20 fw5">@lang('general.relacionados')</div>
                    <div class="lineaHorizontal"></div>
                    <div class="" style="margin-top: 15px;">
                        @foreach($productos as $producto)
                        @php $cont ++;
                        @endphp
                        @if ($cont < 4)                 
                        <div class="col s12 l4">
                            <div class="card z-depth-0">
                                <div class="card-image center-align">
                                    <a href="{{route('producto', $producto->id)}}">
                                        <div class="efecto">
                                            <span class="central"><i class="material-icons">add</i></span>
                                        </div>
                                        <div style="display: flex; justify-content: center; align-items: center;">
                                        <div class="caption" style="position: absolute; z-index: 99; top: 25%;">
                                        <img src="{{asset('img/copyright.png')}}">
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
                    @endif
                    @endforeach
                </div>
            </div>
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
        $('.carousel').carousel();
    });
    $(document).ready(function() {
        $('select').formSelect();
    });

    setTimeout(autoplay, 2400);

    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 2400);
    }

  $(document).ready(function(){
    $('.slider').slider();
  });    
</script>
