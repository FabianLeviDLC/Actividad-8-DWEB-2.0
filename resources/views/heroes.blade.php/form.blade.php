
<label for = "Nombre"> Ingresa el Nombre </label>
<input type = "Text" name = "Nombre"  value = "{{isset($heroe->Nombre)?$heroe->Nombre:''}}" id = "Nombre">
<br>

<label for = "Super_Nombre"> Ingresa el Super Nombre </label>
<input type = "Text" name = "Super_Nombre" value = "{{isset($heroe->Super_Nombre)?$heroe->Super_Nombre:''}}" id = "Super_Nombre" >
<br>

<label for = "Foto"> Inserta la Foto </label>
@if(isset($heroe->Foto))
<img width="50px" height="50x" src="{{asset('storage'.'/'.$heroe->Foto)}}"/>
@endif
<input type = "file" name = "Foto" value = "" id = "Foto">
<br>

<label for = "Info_Extra"> Ingresa algo Extra </label>
<input type = "Text" name = "Info_Extra" value = "{{isset($heroe->Info_Extra)?$heroe->Info_Extra:''}}" id = "Info_Extra">
<br>

<input type = "Submit" value = "Guardar Datos" >

<a href="{{url('/heroes/')}}"> REGRESAR </a>

<br>
