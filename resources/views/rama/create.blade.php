@extends('dashboard')
@section('content')
@include('sweetalert::alert')   
   <div class="w-100 d-flex justify-content-center h-100 aligin-items-center  pt-5 mt-6">
    <div clas s="w-100 justify-content-center d-flex"> 
        <a href="" class="btn bi bi-arrow fs-3"></i></a>
    </div> 
               <div class="col-md-4 col-12 d-flex justify-content-center rounded-5 border p-3 shadow-lg  h-75">
                       <form action="{{route('rama.store')}}" method="post" class="">
                           @csrf
                           <div class="w-100 justify-content-center d-flex">
                                <h1>ingresar un caso</h1>
                           </div>

                           <div clas s="w-100 justify-content-center d-flex"> 
                                <label for="exampleFormControlTextarea1" class="form-label">ingrese la rama:</label>
                                <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion_caso">
                           </div>

                           <div clas s="w-100 justify-content-center d-flex mt-2"> 
                               <button class="btn btn-info w-100 rounded-5 mt-4">Enviar</button>
                           </div>
                           


                       </form>
               </div>
   </div>
@endsection