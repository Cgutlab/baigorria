@extends('adm.main')

@section('titulo', 'Excel')

@section('cuerpo')
    @if(count($errors) > 0)
<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {!!$error!!}
        </li>
        @endforeach
    </ul>
</div>
@endif
    @if(session('success'))
<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
    {{ session('success') }}
</div>
@endif
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default table-responsive">

            <div class="panel-heading">
                <h3 class="panel-title">Carga de productos <span class="glyphicon glyphicon-upload" style="font-size: 24px;color: cadetblue;"></span></h3>
            </div>
      <div class="panel-body">
      <div>
        <h4>
        <a href="{{asset('img/listado_baigorria.xls')}}" target="_blank" style="align-items: center; text-align: center; background: #003E66; color: white; padding: 12px 50px 12px 50px;border-radius: 5px; font-size: 14px;">Descargar Modelo</a>
        </h4>
       </div>
       <h2>ATENCIÓN</h2>
       <p>Para hacer la carga de productos mediante un archivo Excel, deberá cumplir lo siguiente:
       </p>
       <p>1. El archivo debe ser de tipo <strong>Excel</strong> .</p>
       <p>2. Este archivo debe estar estructurado por columnas, la primera fila que identifica (DEBE QUEDAR IGUAL).</p>
       <p>3. La Columnas: FAMILIA_ES , CATEGORIA_ES , CODIGO. Son las que mantendrán la secuencia de los productos.</p>
       <p>-  En caso que no exista, este la creará!</p>
       <p>-  El seudónimo ES/EN/BR, son los idiomas Español/English/Portugués</p>
       <p>4. Considere: Los nombres de los archivos (imagenes/fichas/pdf) deben ser igual al que está en el CODIGO.</p>
       <p>+  Codigo_1.jpg</p>
       <p>+  Codigo_2.jpg</p>
       <p>+  Codigo_3.jpg</p>
       <p>+  Codigo_4.jpg</p>
       <p>+  Codigo.pdf</p>
       <p>
         <table style="border: 1px solid gray; width: 100%;">
           <tr style="background-color: #FAFAFA; font-weight: 600;">
             <td>CODIGO</td>
             <td>FAMILIA_ES</td>
             <td>CATEGORIA_ES</td>
           </tr>
           <tr>
             <td>P-01-002</td>
             <td>Espárragos, conos y tuercas</td>
             <td>Espárragos</td>
           </tr>           
         </table>
       </p>
       </div>


        

<div class="links">
    <form method="post" action="{{route('importCat')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="excel">
        <br><br>
        <input type="submit" value="Enviar" style="padding: 10px 20px;">
    </form>
</div>
    </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $('select').formSelect();
  });

</script>
@endsection