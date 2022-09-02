<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="col-12 d-flex justify-content-center section" style="height: 100vh;">
           <div class="card col-6 p-5 m-auto mt-4  ">
                <form action="{{route('register')}}" method="POST">
                  @csrf
                  <div class="w-100 justify-content-center d-flex text-info">
                    <h1>Register</h1>
                  </div>
                    <div clas s="w-100 justify-content-center d-flex"> 
                        <label for="exampleFormControlTextarea1" class="form-label">ingrese su nombre:</label>
                        <input class="form-control rounded-5" id="exampleFormControlTextarea1" rows="3"  type="text" name="name">
                   </div>
                   <div clas s="w-100 justify-content-center d-flex"> 
                    <label for="exampleFormControlTextarea1" class="form-label">ingrese su email:</label>
                    <input class="form-control rounded-5" id="exampleFormControlTextarea1" rows="3"  type="email" name="email">
                   </div>

                   <div clas s="w-100 justify-content-center d-flex"> 
                    <label for="exampleFormControlTextarea1" class="form-label">ingrese su contraseña:</label>
                    <input class="form-control rounded-5" id="exampleFormControlTextarea1" rows="3" name="password" type="password">
                  </div>
                  <div clas s="w-100 justify-content-center d-flex mt-2"> 
                    <a href="{{route('verLogin')}}" class="d-flex m-auto nav-link text-info">Ya tienes cuenta? logeate</a>
                  </div>
                  <div clas s="w-100 justify-content-center d-flex mt-2"> 
                    <button class="btn btn-info w-100 rounded-5 mt-4">Enviar</button>
                  </div>
                </form>
           </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
