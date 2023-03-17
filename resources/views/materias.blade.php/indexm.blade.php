<a href="{{url('/materias/create')}}"> Agregar nuevo materia</a>
<div class="table-responsive">
<table class="table table-ligth">
        <thead class="table-ligth">
            <tr>
                <th>id</th>
                <th>Asignatura</th>
                <th>Actividad_1</th>
                <th>Calificacion_Act_1</th>
                <th>Actividad_2</th>
                <th>Calificacion_Act_2</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias as $materia) 
            <tr>
             <td>{{$materia->id}}</td>
             <td>{{$materia->Asignatura}}</td>
             <td>{{$materia->Actividad_1}}</td>
             <td>{{$materia->Calificacion_Act_1}}</td>
             <td>{{$materia->Actividad_2}}</td>
             <td>{{$materia->Calificacion_Act_2}}</td>
             <td>

             <a href="{{url('/materia/'.$materia->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/materia/'.$materia->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>