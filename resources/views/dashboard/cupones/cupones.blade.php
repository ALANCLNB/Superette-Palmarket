@extends('dashboard.dash')


@section('cupones')
<<<<<<< HEAD
    <h1>holoooo</h1>
@endsection

@section('cupones2')
<div class="container-fluid">
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-auto mr-auto" 
  style="float: right" data-toggle="modal" data-target="#modalAgregarC"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Cupon</a>
  <h1 class="h3 mb-2 text-gray-800">Cupones</h1>
  <p class="mb-4">Bienvenido a cupones.</p>
  
  
  {{-- Alerta Error al llenar campos --}}
  <div class="row">
      @if ($message = Session::get('Listo'))
          <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">
              <h5>Correcto</h5>
          <span>{{ $message }}</span>   
          </div>    
  
      @endif
  
  </div>

    
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Cupones</h1>
      {{-- <p class="mb-4">Rojo: Queja, Azul: Sugerencia.</p> --}}
     


      {{-- Alertas Correcto --}}
      <div class="row">
        @if ($message = Session::get('Eliminado'))
            <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">
                <h5>Correcto</h5>
            <span>{{ $message }}</span>   
            </div>    
=======
>>>>>>> parent of e8e8540... Login

<h1 class="h3 mb-2 text-gray-800">Roles</h1>
<p class="mb-4">Bienvenido a roles.</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Descripción</th>
            <th>Token</th>
        </thead>

        <tfoot>
            <th>Id</th>
            <th>Descripción</th>
            <th>Token</th>
        </tfoot>

        @foreach ($cupones as $cupon)

                      <tr>
                        <td>{{ $cupon ->id }}</td>
                        <td>{{ $cupon ->descripcion }}</td>
                        <td>{{ $cupon ->token }}</td>
                        <td>
                            
                                <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
                    
                                <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                                
                        </td>
                      </tr>
                @endforeach
        
      
      
            


        
         
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection