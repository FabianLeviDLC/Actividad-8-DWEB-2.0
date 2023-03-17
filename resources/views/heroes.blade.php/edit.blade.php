Edición
<form action="{{url('/heroes/'.$heroe->id)}}" method="post" enctype="multipart/form-data">
@csrf

{{method_field('PATCH')}}

@include(heroes.form);

</form>
