<!DOCTYPE html>

<html lang="es">

<head>
    @include('page.template.metas')
    @include('page.template.links')
</head>

<body>
    @include('page.template.header')

    <main class="registro mt50 mb15">
        <div class="container">
            <div class="row">
                <div class="col l4 s12">
                    {!!Form::open(['route'=>'logindistribuidor', 'method'=>'POST', 'class' => 'col s12'])!!}
                    <h4 class="datos" style="color: #2962E8;">
                        @lang('general.form_registrado')</h4>
                        <div class="row">
                            <div class="usuario_input input-field col s12">
                                {!!Form::text('user',null,['class'=>''])!!}
                                <label for="user">
                                    @lang('general.form_correo')</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contrasena_input input-field col s12">
                                {!!Form::password('password',['class' => 'awesome'])!!}
                                <label for="password">
                                    @lang('general.form_pass')</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light right" style="background: #2962E8!important;" name="action" type="submit">
                            @lang('general.form_join')
                            <i class="material-icons right">
                                send
                            </i>
                        </button>
                        {!!Form::close()!!}
                </div>
                <div class="col l8">
                    {!! Form::open(['route'=>'registro.store', 'method'=>'POST', 'files' => true]) !!}
                    <h3 class="registrate" style="color: #2962E8;">
                        @lang('general.form_registrate')</h3>
                        <p class="desc" style="color: #2962E8;">
                            @lang('general.form_instruccion')</p>
                            <h4 class="datos" style="color: #2962E8;">
                                @lang('general.form_datos')</h4>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_fname')</label>
                                            {!!Form::text('first_name',null,['class'=>''])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_lname')</label>
                                            {!!Form::text('last_name',null,['class'=>''])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_razon')</label>
                                            {!!Form::text('razon_social',null,['class'=>''])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_correo')</label>
                                            {!!Form::email('user',null,['class'=>''])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_pass')</label>
                                            {!!Form::password('password',null,['class' => 'awesome'])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_telefono')</label>
                                            {!!Form::text('phone',null,['class'=>''])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_direccion')</label>
                                            {!!Form::text('address',null,['class'=>''])!!}
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="">
                                            @lang('general.form_localidad')</label>
                                            {!!Form::text('localidad',null,['class'=>''])!!}
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light right" style="background: #2962E8!important;" name="action" type="submit">
                                    @lang('general.form_save')
                                    <i class="material-icons right">
                                        send
                                    </i>
                                </button>
                                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </main>

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