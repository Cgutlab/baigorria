<!DOCTYPE html>

<html lang="es">

<head>

    @include('page.template.metas')

    @include('page.template.links')

</head>

<body>

    @include('page.template.header')

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.4877427694582!2d-58.55350528459142!3d-34.61711276571442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7f9cd0fe7f3%3A0x23752a29f204ac9d!2sTaller+Baigorria!5e0!3m2!1ses!2sar!4v1545311796445"
      width="100%" height="324" frameborder="0" style="border:0" allowfullscreen></iframe>

    <section class="Contacto" style="margin-bottom: 80px;">

        <div class="container">

            <div class="row" style="margin-top: 50px;">

                <div class="col l4 fs17">

                    <div class="row" style="margin-bottom: 15px;">

                        <div class="col s1"><i class="material-icons fs20" style="color: #00456D;">location_on</i></div>

                        <div class="col s11"><a target="_blank" href="https://www.google.com/maps/search/{{$direccion->texto}}" class="fc8 fs17 hover">{{$direccion->texto}}</a></div>

                    </div>

                    <div class="row" style="margin-bottom: 15px;">

                        <div class="col s1"><i class="material-icons fs20" style="color: #00456D;">phone_in_talk</i></div>

                        <div class="col s11"><a href="tel:{{$telefono->texto}}" class="fc8 fs17 hover">{{$telefono->texto}}</a></div>

                    </div>


                    <div class="row" style="margin-bottom: 15px;">

                        <div class="col s1"><i class="material-icons fs20" style="color: #00456D;">email</i></div>

                        <div class="col s11"><a href="mailto:{{$correo->texto}}" class="fc8 fs17 hover">{{$correo->texto}}</a></div>

                    </div>

                </div>

                <div class="col l8">

                    {!!Form::open(['route'=>'contacto.enviar', 'method'=>'POST'])!!}

                    <div class="row">

                        <div class="input-field col s6">

                            <label for="nombre">
                                @lang('general.form_fname')</label>
                                {!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}

                        </div>
                        <div class="input-field col s6">

                            <label for="apellido">
                                @lang('general.form_lname')</label>
                                {!!Form::text('apellido',null,['class'=>'validate', 'required'])!!}

                        </div>
                        <div class="input-field col s6">

                            <label for="email">
                                @lang('general.form_correo')</label>
                                {!!Form::email('email',null,['class'=>'validate', 'required'])!!}

                        </div>
                        <div class="input-field col s6">

                            <label for="nombre">
                                @lang('general.form_telefono')</label>
                                {!!Form::text('telefono',null,['class'=>'validate', 'required'])!!}

                        </div>
                        <div class="col s12">

                            <div class="input-field">

                                <label for="mensaje">
                                    @lang('general.form_text')</label>
                                    {!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea'])!!}

                            </div>

                        </div>

                        <div class="row">

                            <div class="col l6 m12">

                                <div class="g-recaptcha" data-sitekey="6Ldco1gUAAAAAKKt7QO7vSn4tkahcQuMBXAHTeRj"></div>

                            </div>

                            <div class="col l6 m12">

                                <label>

                                    <input type="checkbox" name="acepto" required />

                                    <span>

                                        <a href="#modal1" class="modal-trigger" style="color:#494949;">

                                            <div class="fs15 gris15">{!!$terminos->{'titulo_'.$idioma}!!}</div>

                                        </a>

                                    </span>

                                </label>

                            </div>

                        </div>

                        <div class="col s12" style="margin-top: 25px;">

                            <div class="col s12 no-padding">

                                {!!Form::submit('SEND', ['style' => 'align-items: center;
                                text-align: center;
                                background: #003E66;
                                color: white;
                                padding: 12px 50px 12px 50px;
                                border-radius: 5px;
                                font-size: 14px;'])!!}

                            </div>

                        </div>

                    </div>

                    {!!Form::close()!!}

                </div>

            </div>

        </div>

    </section>



    <div id="modal1" class="modal">

        <div class="modal-content">

            <h4>Términos y condiciones</h4>

            <p>{!! $contenido->texto !!}</p>

        </div>

        <div class="modal-footer">

            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>

        </div>

    </div>



    @include('page.template.footer')



</body>

</html>



@include('page.template.scripts')



<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>



<script type="text/javascript">
    $(document).ready(function() {

        $('.modal').modal();

    });

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