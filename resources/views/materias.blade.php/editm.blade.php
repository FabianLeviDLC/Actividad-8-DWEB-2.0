Edición
<form action="{{url('/materias/'.$materia->id)}}" method="post" enctype="multipart/form-data">
@csrf

{{method_field('PATCH')}}

@include(materias.formm);

</form>