@extends('layout')

@section('content')
@php $cont = 0;
@endphp

<style>
* {

    font-family: 'Montserrat';

}
</style>

<div align="center">
    <img src="{{asset('/img/logos/logos__logo-baigorria.jpg')}}" style="height: 75px;">
    <h2>
        @lang('general.head_listas')
    </h2>
    <h4 style="float: left;">
        @php
        echo date('d/m/Y')
        @endphp
    </h4>
</div>

<table style="border: 1px solid gray; width: 100%;">
    <thead>
        <tr>
            {{-- <td>&nbsp;</td> --}}
            <td>
                @lang('general.tabla_code')</td>
            <td>
                @lang('general.tabla_text')</td>
            <td>
                @lang('general.head_product')</td>
            <td>
                @lang('general.tabla_precio')</td>
            <td>
                @lang('general.tabla_aaaa')</td>
            <td>
                @lang('general.tabla_bbbb')</td>
            <td>
                @lang('general.tabla_cccc')</td>
            <td>
                @lang('general.tabla_dddd')</td>
        </tr>
    </thead>
    <tbody>
        @foreach($presentacion as $presentaciones)
        @php $cont++
        @endphp
        <tr style="@if($cont % 2) background: #FAFAFA @endif">
            {{--
                <td>
                    @if($presentaciones->imagen1)
                    <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen1)}}" style="width:60px;">
            </div>
            @elseif($presentaciones->imagen2)
                <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen2)}}" style="width:60px;"></div>
                @elseif($presentaciones->imagen3)
                    <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen3)}}" style="width:60px;"></div>
                    @elseif($presentaciones->imagen4)
                        <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen4)}}" style="width:60px;"></div>
                        @elseif($presentaciones->productos->imagen)
                            <div><img src="{{asset('img/productos/'.$presentaciones->productos->imagen)}}" style="width:60px;"></div>
                            @endif
                            </td>
                            --}}
                            <td>{!!$presentaciones->codigo!!}</td>
                            <td>{!!$presentaciones->productos->{'titulo_'.$idioma} !!}</td>
                            <td>{!!$presentaciones->{'titulo_'.$idioma} !!}</td>
                            <td>
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
                                @if($precio)
                                $
                                {{$precio}}
                                @endif
                            </td>
                            <td>{!!$presentaciones->medida_a!!}</td>
                            <td>{!!$presentaciones->medida_b!!}</td>
                            <td>{!!$presentaciones->medida_c!!}</td>
                            <td>{!!$presentaciones->terminacion!!}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection