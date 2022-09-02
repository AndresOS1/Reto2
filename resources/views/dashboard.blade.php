<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abogados LA LEY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <div class="col-12 d-flex flex-wrap">
        {{-- ///nav DAShboard --}}
        <div class="col-md-2 col-12">
                 <NAV class="w-100 border shadow-lg rounded-5 h-100 bg-dark d-flex flex-column pt-3 gap-3">
                      <div class="w-100 d-flex img-fluid">
                            
                      </div>
                      <div class="w-100 d-flex justify-content-center aligin-items-center mt-3 ">
                            <h3 class="text-white" style="font-size: 2vw;">Abogados LA LEY</h3>
                      </div>
                      <div class="w-100 d-flex justify-content-center aligin-items-center">
                             <a href="" class="nav-link text-white btn w-100">Caso</a>
                      </div>

                 </NAV>
        </div>

        {{-- section bodt --}}
        <div class="col-md-10 col-12" style="height:100vh;">
                   @yield('content')
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
