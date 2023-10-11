@extends('layouts.app')
@section('titulo','Editar Registro')
@section('contenido')
<div class="card" style="width: 40rem;">
<div class="card-header center">
Editar Categoria
</div>
<div class="card-body">
<form action="{{route('categoria.update',$categoria)}}" class="row g-3" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
  <label class="form-label">Nombre de Categoria</label>
  <input type="text" class="form-control" name="nombre" value="{{$categoria->nombre}}" required>
</div>
<div class="form-group">
  <label class="form-label">Descripcion de la categoria</label>
  <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}"   required>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-success">Guardar</button>
  <a href="{{route('categoria.index')}}" class="btn btn-info">Regresar</a>
</div>
</form>
</div>
</div>


@endsection