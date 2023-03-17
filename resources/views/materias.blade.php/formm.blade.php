
<label for = "Nombre"> Ingresa el Asignatura </label>
<input type = "Text" name = "Asignatura"  value = "{{isset($materia->Asignatura)?$materia->Asignatura:''}}" id = "Asignatura">
<br>

<label for = "Nombre"> Ingresa el Actividad_1 </label>
<input type = "Text" name = "Actividad_1"  value = "{{isset($materia->Actividad_1)?$materia->Actividad_1:''}}" id = "Actividad_1">
<br>

<label for = "Super_Nombre"> Ingresa el Calificacion 1 </label>
<input type = "Text" name = "Calificacion_Act_1" value = "{{isset($materia->Calificacion_Act_1)?$materia->Calificacion_Act_1:''}}" id = "Calificacion_Act_1" >
<br>

<label for = "Nombre"> Ingresa el Actividad_2 </label>
<input type = "Text" name = "Actividad_2"  value = "{{isset($materia->Actividad_2)?$materia->Actividad_2:''}}" id = "Actividad_2">
<br>

<label for = "Super_Nombre"> Ingresa el Calificacion 2 </label>
<input type = "Text" name = "Calificacion_Act_2" value = "{{isset($materia->Calificacion_Act_2)?$materia->Calificacion_Act_2:''}}" id = "Calificacion_Act_2" >
<br>

<input type = "Submit" value = "Guardar Datos" >

<a href="{{url('/heroes/')}}"> REGRESAR </a>

<br>