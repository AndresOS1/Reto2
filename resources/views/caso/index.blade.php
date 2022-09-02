@extends('dashboard')
@section('content')
        <div class="w-100 d-flex justify-content-center h-100 aligin-items-center">
             <div class="col-6 d-flex">
                      <table class="table">
                             <thead>
                                  <tr>
                                      <td scope="col">ID</td>
                                      <td scope="col">CASO</td>
                                      <td scope="col">INSTANCIA</td>
                                      <td scope="col">EDITAR</td>
                                      <td scope="col">ELIMINAR</td>
                                  </tr>
                             </thead>
                             <tbody>
                                <tr>
                                    @foreach($casos->c)
                                        <th scope="row">{{$c->descripcion}}</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    @endforeach
                                </tr>                              
                             </tbody>
                      </table>
             </div>
        </div>
@endsection