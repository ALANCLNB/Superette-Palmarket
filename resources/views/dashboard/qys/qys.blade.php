@extends('dashboard.dash')




@section('qys')
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
                </thead>
    
                <tfoot>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>Contenido</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Sucursal</th>
                </tfoot>
    
                {{-- CAMPOS DE PRUEBA --}}
              <tr>
                <td>20</td>
                <td>aorus@gmai.com</td>
                <td>Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                </td>
                <td>
                    <button class="btn btn-danger boton">Responder</button>                   
                </td>
                <td>2011/08/14</td>
                <td>Arboledas</td>

              </tr>
              <tr>
                <td>21</td>
                <td>aorus@gmai.com</td>
                <td>Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                </td>
                <td>
                    <button class="btn btn-danger boton">Responder</button>                   
                </td>
                <td>2020/08/14</td>
                <td>Pueblo</td>

              </tr>

              <tr>
                <td>22</td>
                <td>aorus@gmai.com</td>
                <td>Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                </td>
                <td>
                    <button class="btn btn-danger boton">Responder</button>                   
                </td>
                <td>2011/08/13</td>
                <td>Lagunas</td>

              </tr>

              <tr>
                <td>23</td>
                <td>aorus@gmai.com</td>
                <td>Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                </td>
                <td>
                    <a href="" class="btn btn-info boton">Responder</a>                 
                </td>
                <td>2011/08/12</td>
                <td>Arboledas</td>

              </tr>

              <tr>
                <td>24</td>
                <td>aorus@gmai.com</td>
                <td>Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                    Fall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on MultigamestationFall Guys de vuelta por el Intento de conseguir La corona vengan y disfruten de este Jueguito . Follow Me on Multigamestation
                </td>
                <td>
                    <a href="" class="btn btn-info boton">Responder</a>                
                </td>
                <td>2011/08/14</td>
                <td>Arboledas</td>

              </tr>
              
              
              
                    
    
    
                
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
    
      </div>
@endsection