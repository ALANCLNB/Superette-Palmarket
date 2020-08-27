@extends('dashboard.dash')




@section('qysadmin')
<div class="container-fluid">
 

    {{-- <div>
      <img class="w-100 h-100" id="imgPdash" src="{{asset('/principal-archivos/assets/img/bg-header.png')}}" alt="">
    </div> --}}
    
    
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quejas y sugerencias</h1>
        <p class="mb-4">Rojo: Queja, Azul: Sugerencia.</p>
       
    
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
                  
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>Contenido</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Sucursal</th>
                    <th>Acciones</th>
                </thead>
    
                <tfoot>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>Contenido</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Sucursal</th>
                    <th>Acciones</th>
                </tfoot>
    
                {{-- CAMPOS DE PRUEBA --}}
                @foreach ($qysug as $qys)
                    <tr>
                      <td>{{ $qys ->id }}</td>
                      <td>{{ $qys ->email }}</td>
                      <td>{{ $qys ->contenido }}</td>
                       
                       
                        @if ($qys ->tipo=='1')
                                <td>
                                  <button class="btn btn-danger boton">Responder</button>                   
                              </td> 
                        @else     
                              <td>
                                <button class="btn btn-info boton">Responder</button>                   
                              </td>
                        @endif 
                        
                      </td>

                      <td>{{ $qys ->created_at }}</td>
                      <td>{{ $qys ->sucursal }}</td>
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
    
      </div>
@endsection





@section('qysuser')
 
{{-- ----------------------------------------------------------------------------------------- --}}
<h1 class="h3 mb-2 text-gray-800">Quejas y sugerencias</h1>


{{-- Alertas Correcto --}}
<div class="row">
  @if ($message = Session::get('Listo'))
      <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">
          <h5>Correcto</h5>
      <span>{{ $message }}</span>   
      </div>    

  @endif

</div>

{{-- Alertas Error --}}
<div class="row">
  @if ($message = Session::get('ErrorInsert'))
      <div class="col-12 alert alert-danger alert-dismissable fade show" role="alert">
          <h5>Errores:</h5>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>                    
              @endforeach    
          </ul>    
      </div>    

  @endif

</div>

<form action="/dash/admin/qys" method="POST">

            @csrf

            <input type="text" class="form-control" name="id_user" placeholder="Usuario ID Pruebas" value="{{ old('id_user') }}">
            
            <input type="text" class="form-control" name="email" placeholder="Usuario ID Pruebas" value="{{ old('email') }}">

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Escriba aqui su comentario.</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenido"></textarea>
            </div>
            
            
            <div class="col-md-3 mb-3      col-lg-10 col-md-10 col-sm-12    ml-auto mb-auto mr-auto mt-auto">
              <label for="validationCustom04">Tipo</label>
              
                  <select class="custom-select    col-lg-4 col-md-6 col-sm-10    ml-auto mb-auto mr-auto mt-auto" name="tipo" id="validationCustom04" required>
                    <option selected disabled value="">Seleccionar</option>
                    <option value="1">Queja</option>
                    <option value="2">Sugerencia</option>
                  </select>

            
              <label for="validationCustom04">Sucursal</label>
              
                  <select class="custom-select   col-lg-4 col-md-6 col-sm-10    ml-auto mb-auto mr-auto mt-auto" name="sucursal" id="validationCustom04" required>
                    <option selected disabled value="">Seleccionar</option>
                    <option value="1">Arboledas</option>
                    <option value="2">Zapata</option>
                    <option value="2">Lagunas</option>
                    <option value="2">Pueblo</option>
                    <option value="2">Reforma</option>
                  </select>

            </div>

            <div class="     col-lg-12 col-md-12 col-sm-12    ml-auto mb-auto mr-auto mt-4" style="text-align: center">

              {{-- <div class="col-lg-5 col-md-3 col-sm-1    ml-auto mb-auto mr-auto mt-auto"></div> --}}

                  <button type="submit" id="btnSubirPDF" class="btn btn-outline-success    col-lg-2 col-md-6 col-sm-10      ml-auto mb-auto mr-auto mt-auto" style="margin-top: 30px;">Enviar</button>

              {{-- <div class="col-lg-5 col-md-3 col-sm-1    ml-auto mb-auto mr-auto mt-auto"></div> --}}

            </div>

  
</form>



@endsection