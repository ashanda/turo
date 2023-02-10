<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- font awesone -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <title>TURO</title>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-trans"
    >
      <div class="container">
        <a class="navbar-brand d-block d-lg-none" href="#">
          <img class="img-fluid" src="{{ asset('assets/img/logo.png')}}" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item px-3">
              <a class="nav-link fw-bold" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link fw-bold" href="#">Buy Vehicales</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link fw-bold" href="#">Vehicle Rent</a>
            </li>
          </ul>
          <a class="navbar-brand d-none d-lg-block mx-3" href="#">
            <img class="img-fluid" src="{{ asset('assets/img/logo.png')}}" alt="" />
          </a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-3">
              <a class="nav-link fw-bold" aria-current="page" href="#"
                >Sale Vehicle</a
              >
            </li>
            <li class="nav-item px-3">
              <a class="nav-link fw-bold" href="#">About Us</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link fw-bold" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- Footer section -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h4 class="pb-5">Get in Contact</h4>
            <ul>
              <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i
                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Address</span>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-mobile" aria-hidden="true"></i
                  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+94123456789</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script>
       $(document).ready(function () { 
            $('#category').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
            //console.log(cat_id);
            //ajax
            $.get('/ajax-subcat?cat_id='+ cat_id,function(data){
                //success data
               console.log(data);
                var subcat =  $('#subcategory').empty();
                $.each(data,function(create,subcatObj){
                    var option = $('<option/>', {id:create, value:subcatObj});
                    subcat.append('<option value ="'+subcatObj['name']+'">'+subcatObj['name']+'</option>');
                });
            });
        });
    });
    </script>
  </body>
</html>
