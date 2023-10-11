@extends('layouts.app')
@section('titulo','Eliminar Registro')
@section('contenido')
<div class="card" style="width: 40rem;">
<div class="card-header center">
Eliminar Servicio
</div>
<div class="card-body">
<div class="form-group">
  <label class="form-label">Nombre de Categoria</label>
  <input type="text" class="form-control" name="nombre_servicio" value="{{$categoria->nombre}}" disabled>
</div>
<div class="form-group">
  <label class="form-label">Descripcion de la Categoria</label>
  <input type="text" class="form-control" name="descripcion_servicio" value="{{$categoria->descripcion}}"  disabled>
</div>
<div class="form-group">
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
  Eliminar
</button>
<a href="{{route('categoria.index')}}" class="btn btn-info">Regresar</a>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">El registro se eliminara</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('categoria.destroy',$categoria)}}" class="row g-3" method="POST" enctype="multipart/form-data">
@csrf
@method('DELETE')
¿En verdad quiere borrar este registro?
<div class="form-group">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-danger">Si</button>
</div>
</form>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>


@endsection