@extends('layout')

@section('content')
    @php $cont = 0; @endphp
    <div align="center">
    <h2>@lang('general.head_listas')</h2>
    <table style="border: 1px solid gray;">
        <thead>
            <tr>
                {{-- <td>&nbsp;</td> --}}
                <td>@lang('general.tabla_code')</td>
                <td>@lang('general.tabla_text')</td>
                <td>@lang('general.head_product')</td>
                <td>@lang('general.tabla_aaaa')</td>
                <td>@lang('general.tabla_bbbb')</td>
                <td>@lang('general.tabla_cccc')</td>
                <td>@lang('general.tabla_dddd')</td>
            </tr>                            
        </thead>
        <tbody>
            @foreach($presentacion as $presentaciones)
            @php $cont++ @endphp
            <tr style="@if($cont % 2) background: #FAFAFA @endif">
                {{-- 
                <td>
                    @if($presentaciones->imagen1)
                    <div><img src="{{asset('img/presentaciones/'.$presentaciones->imagen1)}}" style="width:60px;"></div>
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
                <td style="text-align: left;">{!!$presentaciones->productos->{'titulo_'.$idioma}!!}</td>
                <td>{!!$presentaciones->{'titulo_'.$idioma} !!}</td>
                <td>{!!$presentaciones->medida_a!!}</td>
                <td>{!!$presentaciones->medida_b!!}</td>
                <td>{!!$presentaciones->medida_c!!}</td>
                <td>{!!$presentaciones->terminacion!!}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection