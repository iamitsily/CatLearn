@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
<h1>Permisos</h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Permisos</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                    @can('permission_create') @endcan
                      <a href="{{ route('permisos.create') }}" class="btn btn-sm btn-primary">Añadir permiso</a>
                   
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Guard</th>
                        <th>Created_at</th>
                        <th class="text-right">Acciones</th>
                      </thead>
                      <tbody>
                        @forelse ($permissions as $permission)
                        <tr>
                          <td>{{ $permission->id }}</td>
                          <td>{{ $permission->name }}</td>
                          <td>{{ $permission->guard_name }}</td>
                          <td>{{ $permission->created_at }}</td>
                          <td class="td-actions text-right">
                            @can('permission_show')@endcan
                            <a href="{{ route('permisos.show', $permission->id) }}" class="btn btn-info"><i
                                class="material-icons">Info</i></a>
                            
                            @can('permission_edit')                            @endcan

                            <a href="{{ route('permisos.edit', $permission->id) }}" class="btn btn-warning"><i
                                class="material-icons">Editar</i></a>
                            @can('permission_destroy')                            @endcan

                            <form action="{{ route('permisos.destroy', $permission->id) }}" method="POST"
                              style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                                <i class="material-icons">Borrar</i>
                              </button>
                            </form>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="2">Sin registros.</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer mr-auto">
                  {{ $permissions->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop