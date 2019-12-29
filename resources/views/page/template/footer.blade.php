<footer style="background: #333333; background-image: url('{{asset('img/logos/fondo-footer.jpg')}}'); background-repeat: no-repeat; align-items: left; background-size: cover;
    background-position: center;">

    <div class="container yp25" style="width: 80%; height: 100%;">

        <div class="row cero" style="margin-bottom: 30px;margin-top: 10px;">

            <div class="col l3 m12">

                <div class="col s12 fc1" style="margin-bottom: 10px;">
                    @lang('general.foot_title')
                </div>
                <div class="col l6 s4 fc7">
                    <div style="margin-bottom: 5px;"><a href="{{route('index')}}" class="hoverFooter">@lang('general.head_homepag')</a></div>
                    <div style="margin-bottom: 5px;"><a href="{{route('categorias')}}" class="hoverFooter">@lang('general.head_product')</a></div>
                    <div style="margin-bottom: 5px;"><a href="{{route('exportacion')}}" class="hoverFooter">@lang('general.head_exporta')</a></div>
                </div>
                <div class="col l6 s4 fc7">
                    <div style="margin-bottom: 5px;"><a href="{{route('calidad')}}" class="hoverFooter">@lang('general.head_calidad')</a></div>
                    <div style="margin-bottom: 5px;"><a href="{{route('contacto')}}" class="hoverFooter">@lang('general.head_contact')</a></div>
                </div>
                <div class="col s12" style="margin-top: 10px;">
                    <div>
                        @foreach($redes as $red)
                        <a href="{{$red->link}}" style="float: left; margin-right: 10px;">
                            <div class="hoverFooter">
                                <i class="{{$red->icono}}" style="font-size: 20px;"></i>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>



            <div class="col l6 m12 center-align">

                <div class="row">
                    <div class="col l12 m12">

                        <img class="responsive-img" src="{{asset('img/logos/'.$footer->imagen)}}">

                    </div>
                </div>

            </div>



            <div class="col l3 m12">
                <div class="row">
                    <div class="col s12 fc1">
                        TALLER BAIGORRIA
                    </div>
                </div>
                <div class="row fc1" style="margin-top: 5px;">
                    <div class="col s2">
                        <i class="material-icons" style="font-size: 19px">location_on</i>
                    </div>
                    <div class="col s10">
                        <div><a href="{{'https://www.google.com/maps/search/'.$direccion->texto}}" target="_blank" class="hoverFooter">{{$direccion->texto}}</a></div>
                    </div>
                </div>
                <div class="row fc1" style="margin-top: 5px;">
                    <div class="col s2">
                        <i class="material-icons" style="font-size: 19px">phone_in_talk</i>
                    </div>
                    <div class="col s10">
                        <div><a href="tel:{{$telefono->texto}}" class="hoverFooter">{{$telefono->texto}}</a></div>
                        <div><a href="tel:{{$telefono2->texto}}" class="hoverFooter">{{$telefono2->texto}}</a></div>
                    </div>
                </div>
                <div class="row fc1" style="margin-top: 5px;">
                    <div class="col s2">
                        <i class="material-icons" style="font-size: 19px">email</i>
                    </div>
                    <div class="col s10">
                        <div><a href="mailto:{{$correo->texto}}" class="hoverFooter">{{$correo->texto}}</a></div>
                    </div>
                </div>
            </div>

        </div>

        <div align="center">

            <div style="height:1px; background: #A3A1A3; width:100%;"></div>

        </div>

        <div class="right-align fw6" style="color: #A3A1A3; font-size: 12px; margin: 10px;">

            <small>

                BY OSOLE

            </small>

            <div class="right"></div>

        </div>

    </div>

</footer>
