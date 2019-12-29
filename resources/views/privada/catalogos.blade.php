<!DOCTYPE html>

<html lang="es">

<head>
    @include('privada.template.metas')
    @include('privada.template.links')
</head>

<body>
    @include('privada.template.header')

    <div style="background: #00446F; margin-bottom: 45px;">
        <section style="padding: 50px; background-image: url('{{asset('img/banner/'.$banner->imagen)}}'); background-repeat: no-repeat; background-size: cover; ">
            <div class=" container" style="width:100%;">
                <div class="align-center">
                    <div class="fc1 fs20">
                        <div class="container">
                            <nav class="z-depth-0" style="">
                                <div class="nav-wrapper z-depth-0">
                                    {!! Form::open(['route'=>'catalogo', 'method' => 'POST']) !!}
                                    <div class="input-field" style="background: white; border: 1px solid gray;">
                                        <input id="busqueda" name="busqueda" type="search" placeholder="{!!$banner->{'titulo_'.$idioma}!!}" required>
                                        <label class="label-icon" for="search"><i class="material-icons" style="color: #AFAFAF; font-weight: 600;">search</i></label>
                                        <i class="material-icons azul" style="color: #3E4EB8;">chevron_right</i>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row" style=" margin-bottom: 45px;">
        <div class="container" style="width:100%;">

            @if(count($errors) > 0)
            <div class="col s12 card-panel red lighten-4 red-text text-darken-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!!$error!!}</li>
                        @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="col s12 card-panel red lighten-4 red-text text-darken-4  center-align">
                {{ session('success') }}
            </div>
            @endif

            <table class="highlight bordered responsive-table centered">
                <thead>
                    <tr class="fc15 fw5">
                        <td></td>
                        <td>Código</td>
                        <td>Categoría</td>
                        <td>Descripción</td>
                        <td style="text-align: center;">Modelo</td>
                        <td></td>
                        <td style="width: 30px;text-align: center;">Precio Unitario $</td>
                        <td>Cantidad</td>
                        <td style="width: 30px;text-align: center;">Cantidad por caja</td>
                        <td>Unidades</td>
                        <td style="width: 30px;text-align: center;">Subtotal $</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($presentacion as $presentaciones)
                    {!! Form::open(['route'=>'carrito.add','METHOD'=>'POST'])!!}
                    <tr>
                        <td>
                            @if($presentaciones->imagen1)
                                <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen1)}}" style="width:60px;"></div>
                                @elseif($presentaciones->imagen2)
                                    <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen2)}}" style="width:60px;"></div>
                                    @elseif($presentaciones->imagen3)
                                        <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen3)}}" style="width:60px;"></div>
                                        @elseif($presentaciones->imagen4)
                                            <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen4)}}" style="width:60px;"></div>
                                            @else
                                            <div><img src="{{asset('img/productos/'.$presentaciones->productos->imagen)}}" style="width:60px;"></div>
                                            @endif
                        </td>
                        <td style="text-align: left;">
                            <b>{!!$presentaciones->codigo!!}</b>
                            <div><input type="hidden" value="{{$presentaciones->id}}" name="id_presentacion"></div>
                        </td>
                        <td style="text-align: left;">{!!$presentaciones->productos->{'titulo_'.$idioma}!!}</td>
                        <td style="text-align: left;">{!!$presentaciones->{'titulo_'.$idioma}!!}</td>
                        <td>{!!$presentaciones->terminacion!!}</td>
                        <td>
                            @if($presentaciones->ficha)
                                <a href="{{asset('img/fichas/'.$presentaciones->ficha)}}" target="_blank" class="boton" style="padding-left:5px!important; padding-right:5px!important;">FICHA&nbsp;TÉCNICA</a>
                                @endif
                        </td>
                        <td>
                            <div>
                                @php
                                if($presentaciones->productos->categorias->id === 1){
                                $asignado = 'precio_'.Auth()->user()->precio_esparragos;
                                $precio = $presentaciones->$asignado;
                                }
                                if($presentaciones->productos->categorias->id === 2){
                                $asignado = 'precio_'.Auth()->user()->precio_bulones;
                                $precio = $presentaciones->$asignado;
                                }
                                if($presentaciones->productos->categorias->id === 6){
                                $asignado = 'precio_'.Auth()->user()->precio_especial;
                                $precio = $presentaciones->$asignado;
                                }
                                @endphp
                                {{$precio}}

                            </div>
                        </td>
                        <td>
                            @php
                            $cantidad = '0';
                            $subtotal = '-';
                            $unidades = '-';
                            @endphp

                            @foreach(Cart::content() as $row)
                            @if($row->id == $presentaciones->id)
                                @php
                                $id_presentacion = $row->id;
                                $cantidad = $row->qty;
                                $precio = $precio;
                                if($presentaciones->cantidadxcaja){
                                $unidades = $presentaciones->cantidadxcaja * $row->qty;
                                }else{
                                $unidades = $row->qty;
                                }
                                $subtotal = $precio * $unidades;
                                @endphp
                                <div><input type="hidden" value="{{$row->id}}" name="id_presentacion" style=""></div>
                                <div><input type="hidden" value="{{$row->rowId}}" name="id_carrito" style=""></div>
                                <div><input type="hidden" value="{{$precio}}" name="id_precio" style=""></div>
                                @endif
                                @endforeach
                                <div><input type="number" value="{{$cantidad}}" name="cantidad" style="width: 52px; height: 35px; border: 1px solid #ECECEC; border-radius: 4px; padding-left: 5px; background: #F8F8F8; box-shadow: none;" required></div>
                        </td>
                        <td>
                            @if($presentaciones->cantidadxcaja)
                                {!!$presentaciones->cantidadxcaja!!}
                                @else
                                {{'-'}}
                                @endif
                        </td>
                        <td>
                            <div><input type="hidden" value="{{$precio}}" name="id_precio" style=""></div>
                            {{$unidades}}
                        </td>
                        <td>{{$subtotal}}</td>
                        <td>
                            <div style="display:flex; justify-content:center; align-items: center;">
                                @if($precio)
                                <button type="submit" href="" style="color:#A2A2A2; border:0; background: inherit; width: 120px; display:flex; justify-content: center; align-items: center;">
                                    @if($unidades == '-')
                                    <i class="material-icons">add_shopping_cart</i>
                                    <span>Comprar</span>
                                    @else
                                    <i class="material-icons verde2">check_circle</i>
                                    @endif
                                </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                    {!! Form::close() !!}
                    @endforeach
                </tbody>
            </table>
            <!-- <a href="{{route('carrito.destroy')}}" class="boton">Destroy</a> -->
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

    $("#cantidad").change(function() {
        let cantidad = $(this).val();
        let precio = $("#input_precio").val();

        $('#precio').html("$" + (cantidad * precio).toFixed(2));
    });

    $(document).ready(function() {
        $('select').formSelect();
    });
</script>