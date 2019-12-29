<!DOCTYPE html>

<html lang="es">

<head>
    @include('privada.template.metas')
    @include('privada.template.links')
</head>

<body>
    @include('privada.template.header')

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
    <div class="col s12 card-panel green lighten-4 green-text text-darken-4  center-align">
        {{ session('success') }}
    </div>
    @endif


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
    @php
    $sumatotales = 0;
    @endphp
    <div class="row" style=" margin-bottom: 45px;">
        <div class="container" style="width:100%;">
            <table class="highlight bordered responsive-table centered">
                <thead>
                    <tr class="fc15 fw5">
                        <td></td>
                        <td>Código</td>
                        <td>Categoría</td>
                        <td style="text-align: center;">Precio Unitario $</td>
                        <td>Cantidad</td>
                        <td style="text-align: center;">Cantidad por caja</td>
                        <td>Unidades</td>
                        <td style="text-align: center;">Subtotal $</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @forelse(Cart::content() as $row)
                    {!! Form::open(['route'=>'carrito.actual','METHOD'=>'POST'])!!}
                    @php
                    $id_presentacion = $row->id;
                    $cantidad = $row->qty;
                    $precio = $row->price;
                    $id_presentacion = $row->id;
                    $cantidad = $row->qty;
                    $precio = $precio;
                    if($row->options->cantidadxcaja != ''){
                    $unidades = $row->options->cantidadxcaja * $row->qty;
                    }else{
                    $unidades = $cantidad;
                    }
                    $subtotal = $precio * $unidades;
                    @endphp
                    <tr>
                        <td style="width:60px;">
                            <div>
                                <input type="hidden" value="{{$row->id}}" name="id">
                                <input type="hidden" value="{{$row->rowId}}" name="id_carrito">
                            </div>
                            @if($row->options->imagen1)
                                <div><img src="{{asset('img/presentaciones/'.$row->options->imagen1)}}" style="width:60px"></div>
                                @elseif($row->options->imagen2)
                                    <div><img src="{{asset('img/presentaciones/'.$row->options->imagen2)}}" style="width:60px"></div>
                                    @elseif($row->options->imagen3)
                                        <div><img src="{{asset('img/presentaciones/'.$row->options->imagen3)}}" style="width:60px"></div>
                                        @elseif($row->options->imagen4)
                                            <div><img src="{{asset('img/presentaciones/'.$row->options->imagen4)}}" style="width:60px"></div>
                                            @else
                                            <div><img src="{{asset('img/productos/'.$row->options->imagen)}}" style="width:60px"></div>
                                            @endif
                        </td>
                        <td><b>{!!$row->name!!}</b></td>
                        <td style="text-align: left;">{!!$row->options->{'titulo_'.$idioma}!!}</td>
                        <td>{!!$row->price!!}</td>
                        <td>
                            <div><input type="number" value="{{$row->qty}}" name="cantidad" style="width: 52px; height: 35px; border: 1px solid #ECECEC; border-radius: 4px; padding-left: 5px; background: #F8F8F8; box-shadow: none;" required></div>
                        </td>
                        <td>
                            @if($row->options->cantidadxcaja)
                                {!!$row->options->cantidadxcaja!!}
                                @else
                                {!!'-'!!}
                                @endif
                        </td>
                        <td>
                            @if($row->options->cantidadxcaja)
                                {{($row->options->cantidadxcaja * $row->qty)}}
                                @else
                                {{$row->qty}}
                                @endif
                        </td>
                        <td>{{$subtotal}}</td>
                        <td>
                            <a href="{{ url('carrito/delete/'.$row->rowId) }}" style="color:#A2A2A2; border:2px solid #A2A2A2; border-radius: 100%; background: inherit; width: 30px; height: 30px; display:flex; justify-content: center; align-items: center;">
                                <i class="material-icons">close</i>
                                <span class="rpedido">
                                </span>
                            </a>

                        </td>
                    </tr>
                    {!! Form::close() !!}
                    @php
                    $sumatotales = $subtotal + $sumatotales;
                    @endphp
                    @empty
                    <div class="center-align">
                        <h3>¡No hay productos agregados al carrito!</h3>
                    </div>
                    @endforelse
                </tbody>
            </table>
            <br>
            @if(Cart::count() > 0)
            {!! Form::open(['route'=>'carrito.enviar', 'method'=>'POST']) !!}
            <div class="row">
                <div class="container" style="width: 87%;">
                    <div class="col l8 m12">
                        <div class="input-field col s12">
                            <textarea id="mensaje" name="mensaje" class="materialize-textarea"></textarea>
                            <label for="mensaje">Mensaje adicional ...</label>
                        </div>
                    </div>
                    <div class="col l4 m12">
                        <input type="hidden" name="subtotal" value="{{$sumatotales}}">
                        <input type="hidden" name="iva" value="{{$sumatotales * 0.21}}">
                        <input type="hidden" name="total" value="{{$sumatotales * 0.21 + $sumatotales}}">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td style="text-align: right;">
                                        ${{$sumatotales}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>IVA</td>
                                    <td style="text-align: right;">
                                        ${{$sumatotales * 0.21}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>TOTAL (IVA Incluido)</td>
                                    <td style="text-align: right;">
                                        ${{$sumatotales * 0.21 + $sumatotales}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="">
                                            <a href="{{route('catalogos')}}" class="boton" style="background: white; color: #003E66; border: 1px solid #003E66;">CONTINUAR</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <button type="submit" class="boton">REALIZAR&nbsp;PEDIDO</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            @endif
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