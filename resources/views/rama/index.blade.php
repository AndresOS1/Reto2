@extends('dashboard')
@section('content')
@include('sweetalert::alert')
        <div class="w-100 d-flex justify-content-center h-100 aligin-items-center">

             <div class="col-9 d-flex m-auto flex-column rounded-5 border p-2 shadow-lg">
                <div clas s="w-100 justify-content-center d-flex"> 
                    <a href="{{route('rama.create')}}" class="btn bi bi-arrow fs-3 text-info"><i class="bi bi-folder-plus"></i></a>
                </div>

                <form action="{{route('rama.index')}}" method="GET" >
                  @csrf
                  <div  class="input-group w-100">
                      <input type="text" class="form-control" name="buscar">
                      <a href="" class="btn btn-info bi bi-search input-text-group"></a>
                  </div>
                </form>
                      <table class="table">
                             <thead>
                                  <tr>
                                      <th scope="col" class="text-info">ID</th>
                                      <th scope="col" class="text-info">RAMA</th>
                                  </tr>
                             </thead>
                             <tbody>
                                @foreach($ramas as $r)
                                <tr>
                                     
                                    <th scope="row">{{$r->id_rama}}</th>
                                        <td>{{$r->nombre_rama}}</td>
                                        <td><a href="{{route('editarcaso',$r->id_rama)}}" class="btn bi bi-pencil text-info"></a></td>
                                        <td>
                                                <form action="{{route('eliminarcaso',$r->id_rama)}}" method="Post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-info bi-trash"></button>
                                                </form> 
                                        </td>
                                  
                                </tr>   
                                @endforeach                           
                             </tbody>
                      </table>

                      {{-- {{$casos->links()}} --}}
             </div>
        </div>
@endsection