<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
           <li> {{ $error }} </li>
    @endforeach
    </ul>
</div>

@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id=""Nombre>

</div>

<div class="form-group">
    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">

</div>

<div class="form-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">

</div>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->correo)?$empleado->correo:old('Correo') }}" id="Correo">

</div>

<div class="form-group mt-2">
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid"  src="{{ asset('storage').'/'.$empleado->Foto }}" width="100px" alt="">
    @endif
    <input class="form-control" type="file" name="Foto" id="foto">

</div>

<input type="submit" class="btn btn-success mt-3" value="{{ $modo }} datos">

<a href="{{ url('empleado') }}" class="btn btn-primary mt-3">Regresar</a>
