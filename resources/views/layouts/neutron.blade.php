

@include('layouts.plantillaencabezado')

<div class="container-fluid">
@csrf
    @include('layouts.tabla insertar articulos')


</div>

@include('layouts.plantillapie')
