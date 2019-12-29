<style media="screen">
    .formLogin {
        width: 290px !important;
    }
</style>

<header style="font-family: 'Monserrat'; margin-bottom: 0;">

    <div style="margin-bottom: 0; display: flex; justify-content: center; align-items: center;">
        {{-- transparent --}}

        <div class="container" style="width: 85%; ">

            <a href="#" data-target="slide-out" class="hide-on-large-only sidenav-trigger right" style="margin: 40px 0 50px 0px; padding: 0 10px 0 10px; border: 1px solid #DDDDDD"><i class="material-icons">menu</i></a>
            <div class="row" style=" margin-bottom: 0; margin-right: 0;">

                <div class="col l2">
                    <a href="{{route('privatezone')}}" class="center hide-on-med-and-down" style="margin-top: 10px; margin-bottom: 10px;">
                        <img class="responsive-img" src="{{asset('img/logos/'.$header->imagen)}}">
                    </a>
                    <a href="{{route('privatezone')}}" class="center hide-on-large-only" style="margin-top: 10px; margin-bottom: 0px;">
                        <img class="responsive-img" src="{{asset('img/logos/'.$header->imagen)}}" style="height: 100px;">
                    </a>
                </div>

                <div class="offset-l4 col l6 hide-on-med-and-down">
                    <div class="row">
                        <div>
                            <div class="offset-l2 col l8">
                                <span style="display:flex; justify-content: center; align-items: center; margin-top:5px;">
                                    <i class="material-icons" style="margin-right:3px;color: #B0B0B0">account_circle</i>
                                    <span>
                                        @if(Auth()->user())
                                            <span style="color: #B0B0B0">
                                                @lang('general.bienvenido')
                                                {{Auth()->user()->first_name}}
                                            </span>
                                            <a class='dropdown-trigger hoverColor' href='{{route('adm.logoutd')}}'>
                                                @lang('general.cerrar_sesion')
                                            </a>
                                            @else
                                            Username
                                            @endif</span>
                                    </span>
                            </div>
                            <div class="col l2">
                                <a class='dropdown-trigger hoverColor' href='#' data-target='dropdown2' style="display: flex; justify-content: center; align-items: center; border-left: 1px solid #BBBBBB; margin-top:5px;">
                                    <span style="display:flex; justify-content: center; align-items: center; ">
                                        <span class="mayus">{{$idioma}}</span>
                                        <i class="material-icons">expand_more</i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row center-align" style="margin-top:10px;">
                        <div class="col l4">
                            <a href="{{route('catalogos')}}">
                                <div class="navTXT  @if($active == 'catalogo') navActive @endif">@lang('general.head_catalogo')</div>
                            </a>
                        </div>

                        <div class="col l3">
                            <a href="{{route('carrito')}}">
                                <div class="navTXT  @if($active == 'carrito') navActive @endif">@lang('general.head_carrito')</div>
                            </a>
                        </div>

                        <div class="col l4">
                            <a href="{{route('listadeprecios')}}">
                                <div class="navTXT  @if($active == 'listadeprecios') navActive @endif">@lang('general.head_listas')</div>
                            </a>
                        </div>
                        <div class="col l1 hide-on-med-and-down" style="margin-top: 8px;">
                            <a href="{{route('buscar')}}" style="float: left;">
                                <div class="navICO">
                                    <i class="material-icons">search</i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<ul id="slide-out" class="sidenav">
    <li>
        <a href="{{route('index')}}">
            <div class=" @if($active == 'home') sideActive @endif">@lang('general.head_homepag')</div>
        </a>
    </li>
    <li>
        <a href="{{route('categorias')}}">
            <div class=" @if($active == 'productos') sideActive @endif">@lang('general.head_product')</div>
        </a>
    </li>
    <li>
        <a href="{{route('exportacion')}}">
            <div class=" @if($active == 'exportacion') sideActive @endif">@lang('general.head_exporta')</div>
        </a>
    </li>
    <li>
        <a href="{{route('calidad')}}">
            <div class=" @if($active == 'calidad') sideActive @endif">@lang('general.head_calidad')</div>
        </a>
    </li>
    <li>
        <a href="{{route('contacto')}}">
            <div class=" @if($active == 'contacto') sideActive @endif">@lang('general.head_contact')</div>
        </a>
    </li>
    <li>
        <a href="{{route('buscar')}}">
            <div class=" @if($active == 'busca') sideActive @endif">@lang('general.buscador')</div>
        </a>
    </li>
    <li>
        <a href="{{route('catalogos')}}">
            <div class=" @if($active == 'catalogo') sideActive @endif">@lang('general.head_catalogo')</div>
        </a>
    </li>
    <li>
        <a href="{{route('carrito')}}">
            <div class=" @if($active == 'carrito') sideActive @endif">@lang('general.head_carrito')</div>
        </a>
    </li>
    <li>
        <a href="{{route('listadeprecios')}}">
            <div class=" @if($active == 'listadeprecios') sideActive @endif">@lang('general.head_listas')</div>
        </a>
    </li>
    @if(Auth()->user())
        <li>
            <a href="{{route('adm.logoutd')}}">
                <div><b>Logout</b>&nbsp;{{Auth()->user()->user}}</div>
            </a>
        </li>
        @endif
</ul>

<ul class="dropdown-content formLogin" id="dropdown1" style="background: none, width:400px!important; height: 300px!important;">
    <div class="container" style="background: white; margin-top: 19px !important; outline: none; width: 282px!important;">
        {{-- {!!Form::open(['route'=>'logindistribuidor', 'method'=>'POST'])!!} --}}
        <div class="input-field col s12" style="padding-left: 10px; margin: 2px; margin-top: 1px; margin-bottom: 9px;">
            {!!Form::text('username',null,['class'=>'', 'required', 'autocomplete' => 'off'])!!}
            <label for="username" style="color:gray; font-weight: 500; font-size: 15px;">
                @lang('general.form_user')
            </label>
        </div>
        <div class="input-field col s12" placeholder="password" style="padding-left: 10px; margin: 2px;">
            {!!Form::password('password',null,['class'=>'', 'required', 'style'=>'border-bottom:0;'])!!}
            <label for="password" style="color:gray; font-weight: 500; font-size: 15px;">
                @lang('general.form_pass')
            </label>
        </div>
        <style type="text/css">
            .color-del-boton {
                background-color: #01A0E2;
            }

            .color-del-boton:hover {
                background-color: #01A0E2;
            }
        </style>
        <div class="col s12" style="position: relative; right: 30%;margin-top: 9%;margin-bottom: 2%;">
            <input class="waves-effect waves-light btn right colorboton z-depth-0" style="color: white;font-weight: bold; background: #009688!important;" type="submit" value="@lang('general.form_join')">
            <a href="{{route('catalogos')}}" class="waves-effect waves-light btn right colorboton z-depth-0">INGRESAR</a>

        </div>
        <li class="center" style="font-size: 12px;color: pink; text-decoration: none;">
            <a href="{{ url('registro') }}" style="color: #2962E8!important; text-align: center;">
                @lang('general.form_new')
            </a>
        </li>
        {{-- {!!Form::close()!!} --}}
    </div>
</ul>

<!-- Dropdown Structure -->
<ul id='dropdown2' class='dropdown-content'>
    <li><a href="{{ url('idioma/es') }}">ES</a></li>
    <li><a href="{{ url('idioma/en') }}">EN</a></li>
    <li><a href="{{ url('idioma/br') }}">BR</a></li>
</ul>

<div style="position: fixed;bottom: 0px;right: 10%;padding: 10px;background: #00456D; color: white;text-align: center; width: 250px; z-index: 999999;">
    <div class="row">
        <div class="col l5 left-align">
            <a href="{{asset('img/catalogo-esparragos.pdf')}}" target="_blank" class="fc1">
                <div>Descarga</div>
                <div><b>el&nbsp;Catálogo</b></div>
            </a>
        </div>
        <div class="col l7">
            @foreach($redes as $red)
            <a href="{{$red->link}}" style="float: left; margin-top: 10px; margin-right: 5px; margin-left: 5px;" target="_blank">
                <div class="fc1">
                    <i class="{{$red->icono}}" style="font-size: 20px;"></i>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</div>