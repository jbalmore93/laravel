@extends('layouts.app')
@section('titulo','Categorias')
@section('contenido')
<div>
<div class=" text-center form-group">
<label><h1>CATEGORIAS</h1></label>
</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Create">
  Nuevo
</button>
<div class="modal fade" id="Create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-success p-2 text-white" style="--bs-bg-opacity: .50;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="{{route('categoria.store')}}" class="row g-3" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label class="form-label">Nombre de Categoria</label>
  <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
</div>
<div class="form-group">
  <label class="form-label">Descripcion de la categoria</label>
  <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-light">Guardar</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
</div>
</form>
</div>
</div>
      </div>
    </div>
<table class="table table">
<tr class="text-center">
<th>ID</th>
<th>Nombre</th>
<th>Descripcion</th>
<th colspan="2">Acciones</th>
</tr>

@foreach($categoria as $categoria)
<tr class="text-center">
<td>{{$categoria->id}}</td>
<td>{{$categoria->nombre}}</td>
<td>{{$categoria->descripcion}}</td>
<td><a href="{{route('categoria.edit', $categoria->id)}}" class = "btn btn-secondary">Editar</a></td>
<td><a href="{{route('categoria.show',$categoria->id)}}" class = "btn btn-danger">Eliminar</a></td>
</tr>
@endforeach

</table>
</div>
@endsection