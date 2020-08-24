@extends('dashboard.dash')








@section('usuarios')


<div class="container-fluid">
 
    {{-- <div>
      <img class="w-100 h-100" id="imgPdash" src="{{asset('/principal-archivos/assets/img/bg-header.png')}}" alt="">
    </div> --}}
       
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
        <p class="mb-4">.</p>
         
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
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>otro</th>
                </thead>
    
                <tfoot>
                    <th>ID</th>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>otro</th>
                </tfoot>
    
                {{-- CAMPOS DE PRUEBA --}}
              <tr>
                <td>1</td>
                <td>aorus@gmai.com</td>
                <td>Juan</td>
                <td>Solis</td>
                <td>25</td>

                <td>
                    <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
        
            
                    <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                    
                </td>








              </tr>
              <tr>
                <td>2</td>
                <td>alfa@gmai.com</td>
                <td>Marco</td>
                <td>Salas</td>
                <td>31</td>
                <td>
                    
                        <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
            
                
                        <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                        
                    
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>pubg@gmai.com</td>
                <td>Luis</td>
                <td>Romero</td>
                <td>19</td>
                <td>

                    
                        <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
            
                
                        <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                        
                    
                </td>
              </tr>

              <tr>
                <td>4</td>
                <td>amd@gmai.com</td>
                <td>Lisa</td>
                <td>Su</td>
                <td>40</td>
                <td>

                    
                        <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
            
                
                        <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                        
                    
                </td>
              </tr>

              <tr>
                <td>5</td>
                <td>eagle@gmai.com</td>
                <td>Brisa</td>
                <td>Romero</td>
                <td>21</td>
                <td>

                   
                        <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
            
                
                        <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                        
                    
                </td>
              </tr>

              <tr>
                <td>6</td>
                <td>pencil@gmai.com</td>
                <td>Bic</td>
                <td>Vapo</td>
                <td>42</td>
                <td>

                 
                        <a href="" class="btn btn-info boton"><i class="fa fa-edit"></i></a>
            
                
                        <button class="btn btn-danger boton"><i class="fa fa-trash"></i></button>
                        
                    
                </td>
              </tr>
              
              
                    
    
    
                
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
    
      </div>
@endsection