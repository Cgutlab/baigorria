<!DOCTYPE html>
<html lang="en">
@if(Auth()->user()->role == 'cliente')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page Not Found</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html,
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    Sorry, the page you are looking for could not be found. </div>
            </div>
        </div>
    </body>

    </html>
    @else

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Panel de Administrador | @yield('titulo')</title>
        <!-- Materialize Core CSS -->
        <link href="{{ asset('css/materialize/css/materialize.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style type="text/css">
            .adm-estandar * {
                font-size: 14px !important;
                padding: 0;
                margin: 0;
                line-height: 20px
            }
        </style>
    </head>

    <body>



        <!-- Menu derecho -->
        <div class="row">
            <div id="nav-mobile" class="side-nav fixed col s3 z-depth-1" style="padding: 0; height: 100%; overflow-y: auto; position: fixed;" role="navigation">

                <img class="responsive-img hide-on-med-and-down" src="{{asset('img/logos/'.$header->imagen)}}">
                <ul class="collapsible z-depth-0">

                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">home</i>Home</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('slider.create', ['seccion' => 'home']) }}">Crear Slider</a></div>
                            <div><a href="{{ route('slider.show', ['seccion' => 'home']) }}">Editar Slider</a></div>
                            <div><a href="{{ route('destacado.show', ['seccion' => 'home']) }}">Editar Destacado</a></div>
                            <div><a href="{{ route('iconos.create', ['seccion' => 'home']) }}">Crear Icono</a></div>
                            <div><a href="{{ route('iconos.show', ['seccion' => 'home']) }}">Editar Icono</a></div>
                            <div><a href="{{ route('contenido.show', ['seccion' => 'home']) }}">Editar Contenido</a></div>
                            <div><a href="{{ route('banners.show', ['seccion' => 'home']) }}">Editar Banner</a></div>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">style</i>Productos</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('categoria.create') }}">Crear Categoria</a></div>
                            <div><a href="{{ route('categoria.index') }}">Editar Categoria</a></div>
                            <div><a href="{{ route('producto.create') }}">Crear Producto</a></div>
                            <div><a href="{{ route('producto.index') }}">Editar Producto</a></div>
                            <div><a href="{{ route('presentacion.create') }}">Crear Presentacion</a></div>
                            <div><a href="{{ route('presentacion.index') }}">Editar Presentacion</a></div>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">public</i>Exportacion</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('banners.show', ['seccion' => 'exportacion']) }}">Editar Banner</a></div>
                            <div><a href="{{ route('contenido.show', ['seccion' => 'exportacion']) }}">Editar Contenido</a></div>
                            <div><a href="{{ route('paises.create') }}">Crear Países</a></div>
                            <div><a href="{{ route('paises.index') }}">Editar Países</a></div>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">star</i>Calidad</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('banners.show', ['seccion' => 'calidad']) }}">Editar Banner</a></div>
                            <div><a href="{{ route('contenido.show', ['seccion' => 'calidad']) }}">Editar Contenido</a></div>
                            <div><a href="{{ route('destacado.show', ['seccion' => 'calidad']) }}">Editar Destacado</a></div>
                            <div><a href="{{ route('certificados.create', ['seccion' => 'calidad']) }}">Crear Certificado</a></div>
                            <div><a href="{{ route('certificados.show', ['seccion' => 'calidad']) }}">Editar Certificado</a></div>
                            <div><a href="{{ route('articulos.create', ['seccion' => 'calidad']) }}">Crear Articulo</a></div>
                            <div><a href="{{ route('articulos.show', ['seccion' => 'calidad']) }}">Editar Articulo</a></div>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">email</i>Contacto</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('slider.create', ['seccion' => 'contacto']) }}">Crear Slider</a></div>
                            <div><a href="{{ route('slider.show', ['seccion' => 'contacto']) }}">Editar Slider</a></div>
                            <div><a href="{{ route('contenido.show', ['seccion' => 'contacto']) }}">Editar Contenido</a></div>
                            <div><a href="{{ route('contenido.show', ['seccion' => 'condiciones']) }}">Términos y condiciones</a></div>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">search</i>Buscador</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('banners.show', ['seccion' => 'busca']) }}">Editar Banner</a></div>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">supervisor_account</i>Zona Privada</a>
                        <div class="collapsible-body">
                            <div><a href="{{ route('banners.show', ['seccion' => 'privatezone']) }}">Banner Bienvenido</a></div>
                            <div><a href="{{ route('contenido.show', ['seccion' => 'privatezone']) }}">Contenido Bienvenido</a></div>
                            <div><a href="{{ route('banners.show', ['seccion' => 'catalogo']) }}">Banner Productos</a></div>
                            <div><a href="{{ route('banners.show', ['seccion' => 'carrito']) }}">Banner Carrito</a></div>
                            {{-- <div><a href="{{ route('listadeprecios.create', ['seccion' => 'privada']) }}">Crear Lista Precios</a>
                        </div> --}}
                        <div><a href="{{ route('listadeprecios.show', ['seccion' => 'privada']) }}">Editar Lista Precios</a></div>
                        <div><a href="{{ url('adm/clientes') }}">Lista de Clientes</a></div>
            </div>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">attach_file</i>Excel</a>
                <div class="collapsible-body">
                    <div><a href="{{ route('excelcat') }}">Carga Productos</a></div>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">remove_red_eye</i>Redes sociales</a>
                <div class="collapsible-body">
                    <div><a href="{{ url('adm/redes/create') }}">Crear red social</a></div>
                    <div><a href="{{ url('adm/redes/show') }}">Editar red social</a></div>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">collections</i>Logos</a>
                <div class="collapsible-body">
                    <div><a href="{{ url('adm/logos') }}">Editar logos</a>
                    </div>
            </li>

            <li class="bold">
                <a class="collapsible-header waves-effect waves-admin"><i class="tiny material-icons">view_headline</i>Datos de la empresa</a>
                <div class="collapsible-body">
                    <div><a href="{{ url('adm/datos') }}">Editar datos</a></div>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">pin_drop</i>Metadatos</a>
                <div class="collapsible-body">
                    <div><a href="{{ url('adm/metadatos') }}">Editar Metadatos</a></div>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-admin"><i class="material-icons">account_circle</i>Usuarios</a>
                <div class="collapsible-body">
                    <div><a href="{{ url('adm/usuarios/create') }}">Crear Usuario</a></div>
                    <div><a href="{{ url('adm/usuarios') }}">Editar Usuario</a></div>
                </div>
            </li>

            {{--
<li class="bold">
<a class="collapsible-header waves-effect waves-admin"><i class="material-icons">business</i>Empresa</a>
<div class="collapsible-body">
    <div><a href="{{ route('slider.create', ['seccion' => 'empresa']) }}">Crear Slider</a>
        </div>
        <div><a href="{{ route('slider.show', ['seccion' => 'empresa']) }}">Editar Slider</a></div>
        <div><a href="{{ route('contenido.show', ['seccion' => 'empresa']) }}">Editar Contenido</a></div>
        <div><a href="{{ route('lineatiempo.create', ['seccion' => 'empresa']) }}">Crear Tiempo</a></div>
        <div><a href="{{ route('lineatiempo.show', ['seccion' => 'empresa']) }}">Editar Tiempo</a></div>
        </div>
        </li>

        <li class="bold">
            <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">local_library</i>Servicios</a>
            <div class="collapsible-body">
                <div><a href="{{ route('slider.create', ['seccion' => 'servicios']) }}">Crear Slider</a>
                </div>
                <div><a href="{{ route('slider.show', ['seccion' => 'servicios']) }}">Editar Slider</a></div>
                <div><a href="{{ route('contenido.show', ['seccion' => 'servicios']) }}">Editar Contenido</a></div>
                <div><a href="{{ route('actividades.create') }}">Crear Actividad</a></div>
                <div><a href="{{ route('actividades.index') }}">Editar Actividad</a></div>

            </div>
        </li>
        <li class="bold">
            <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">videocam</i>Videos</a>
            <div class="collapsible-body">
                <div><a href="{{ route('slider.create', ['seccion' => 'videos']) }}">Crear Slider</a>
                </div>
                <div><a href="{{ route('slider.show', ['seccion' => 'videos']) }}">Editar Slider</a></div>
                <div><a href="{{ route('contenido.show', ['seccion' => 'videos']) }}">Editar Contenido</a></div>
                <div><a href="{{ route('videos.create') }}">Crear Video</a></div>
                <div><a href="{{ route('videos.index') }}">Editar Video</a></div>
            </div>
        </li>

        <li class="bold">
            <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">local_movies</i>Galeria</a>
            <div class="collapsible-body">
                <div><a href="{{ route('slider.create', ['seccion' => 'galerias']) }}">Crear Slider</a>
                </div>
                <div><a href="{{ route('slider.show', ['seccion' => 'galerias']) }}">Editar Slider</a></div>
                <div><a href="{{ route('contenido.show', ['seccion' => 'galerias']) }}">Editar Contenido</a></div>
                <div><a href="{{ route('vcategorias.create') }}">Crear Categoria</a></div>
                <div><a href="{{ route('vcategorias.index') }}">Editar Categoria</a></div>
                <div><a href="{{ route('vgalerias.create') }}">Crear Galeria</a></div>
                <div><a href="{{ route('vgalerias.index') }}">Editar Galeria</a></div>
            </div>
        </li>
        <li class="bold">
            <a class="collapsible-header waves-effect waves-admin"><i class="material-icons">location_on</i>Donde Estamos</a>
            <div class="collapsible-body">
                <div><a href="{{ route('slider.create', ['seccion' => 'donde-estamos']) }}">Crear Slider</a>
                </div>
                <div><a href="{{ route('slider.show', ['seccion' => 'donde-estamos']) }}">Editar Slider</a></div>
                <div><a href="{{ route('contenido.show', ['seccion' => 'donde-estamos']) }}">Editar Contenido</a></div>
            </div>
        </li>
        --}}

        </ul>
        </div>
        <div id="page-wrapper">
            <nav class="z-depth-0 col s9 push-s3" style="padding: 0;">
                <div class="nav-wrapper nave ">
                    <ul class="hide-on-med-and-down" style="margin: 0 10%;">

                        <li>
                            <div style="font-size: 24px;">@yield('titulo')</div>
                        </li>
                    </ul>

                    <ul class="right hide-on-med-and-down" style="margin: 0 10%;">
                        <li><a class="dropdown-trigger" href="{{route('adm.logout')}}" data-target="dropdown1">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </nav>
            <div class="col s9 push-s3" style="padding: 40px;">
                @yield('cuerpo')
            </div>
        </div>
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js')}}"></script>

        <!-- Materialize Core JavaScript -->
        <script src="{{ asset('css/materialize/js/materialize.min.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.collapsible').collapsible();
            });
        </script>

        <script type="text/javascript">
            $('.confirmar').click(function(event) {
                if (!confirm('¿Esta seguro que desea borrar este registro?')) {
                    event.preventDefault();
                }
            });
        </script>
    </body>
    @endif

</html>