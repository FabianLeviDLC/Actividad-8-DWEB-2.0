<a href="{{url('/heroes/create')}}"> Agregar nuevo Heroe</a>
<div class="table-responsive">
<table class="table table-ligth">
        <thead class="table-ligth">
            <tr>
                <th>id</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Super_Nombre</th>
                <th>Info_Extra</th>
            </tr>
        </thead>
        <tbody>
            @foreach($heroes as $heroe) 
            <tr>
            <td>{{$heroe->id}}</td>
             <td>
                <img width="50px" height="50x" src="{{asset('storage'.'/'.$heroe->Foto)}}"/>
             {{$heroe->Foto}}
            
            
            </td>
             <td>{{$heroe->Nombre}}</td>
             <td>{{$heroe->Super_Nombre}}</td>
             <td>{{$heroe->Info_Extra}}</td>
             <td>

             <a href="{{url('/heroe/'.$heroe->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/heroe/'.$heroe->id)}}" method="post">
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