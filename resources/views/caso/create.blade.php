@extends('dashboard')
@section('content')
    
   <div class="w-100 d-flex justify-content-center h-100 aligin-items-center">
               <div class="col-4  d-flex justify-content-center rounded-5 border p-3 shadow-lg  h-50">
                       <form action="" method="post">
                           @csrf
                           <div class="w-100 justify-content-center d-flex">
                                <h1>ingresar un caso</h1>
                           </div>

                           <div clas s="w-100 justify-content-center d-flex"> 
                                <label for="exampleFormControlTextarea1" class="form-label">ingrese la descripcion de su caso:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                           </div>
                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <select name="instancia_id" id="" requided class="form-select mt-2">
                                    <option value="" selected>ingrese su instancia</option>
                                    {{-- @foreach ($instancias as $i)
                                       <option value="{{$i->id_instancia}}">{{$i->estasdo}}</option>
                                    @endforeach --}}
                               </select>
                           </div>
                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <button class="btn btn-dark w-100 rounded-5 mt-4">Enviar</button>
                           </div>
                           


                       </form>
               </div>
   </div>
@endsection