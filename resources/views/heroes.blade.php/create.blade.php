Formulario de creación 

<form action = "{{url('/heroes)}}" method = "post"  enctype ="multipart/form-data">

@csrf;

@include(heroes.form);

</form>