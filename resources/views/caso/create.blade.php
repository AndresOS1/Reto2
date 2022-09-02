@extends('dashboard')
@section('content')
@include('sweetalert::alert')   
<div clas s="col-12 justify-content-center d-flex p-2"> 
    <a href="{{route('caso.index')}}" class="btn bi-info text-info fs-1"></a>
</div>
   <div class="w-100 d-flex justify-content-center h-75 aligin-items-center  pt-5 mt-6 flex-wrap">

               <div class="col-md-4 col-12 d-flex justify-content-center rounded-5 border p-3 shadow-lg  h-100">
                       <form action="{{route('caso.store')}}" method="post" class="">
                           @csrf
                           <div class="w-100 justify-content-center d-flex">
                                <h1>ingresar un caso</h1>
                           </div>

                           <div clas s="w-100 justify-content-center d-flex"> 
                                <label for="exampleFormControlTextarea1" class="form-label">ingrese la descripcion de su caso:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion_caso"></textarea>
                           </div>
                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <select name="instancia_id" id="" requided class="form-select mt-2">
                                    <option value="" selected>ingrese su instancia</option>
                                    @foreach ($instancias as $i)
                                       <option value="{{$i->id_instancia}}">{{$i->estado}}</option>
                                    @endforeach
                               </select>
                           </div>

                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                             <select  id="" requided class="form-select mt-2" name="rama_id">
                                 <option value="" selected>seleccione su rama</option>
                                 @foreach ($ramas as $r)
                                    <option value="{{$r->id_rama}}">{{$r->nombre_rama}}</option>
                                 @endforeach
                             </select>
                           </div>

                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <button class="btn btn-info w-100 rounded-5 mt-4">Enviar</button>
                           </div>
                           


                       </form>
               </div>

   </div>
@endsection