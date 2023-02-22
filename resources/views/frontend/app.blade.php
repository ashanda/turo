<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- font awesone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <!-- Custom css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
  <title>TURO</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-trans">
    <div class="container">
      <a class="navbar-brand d-block d-lg-none" href="{{ url('/') }}">
        <img class="img-fluid" src="{{ asset('assets/img/logo.png')}}" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item px-3">
            <a class="nav-link fw-bold" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link fw-bold" href="{{ route('vehicle.all_vehicles') }}">Vehicales</a>
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
            <a class="nav-link fw-bold" aria-current="page" href="#">Sale Vehicle</a>
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
          <h4 class="pb-5 f_ti">Get in Contact</h4>
          <ul>
            <li>
              <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Rock St 12, Newyork City, USA</span>
            </li>
            <li>
              <a href="tel:1234567890">
                <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>123-456-7890</span>
              </a>
            </li>
            <li>
              <a href="mailto:sample@gmail.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>sample@gmail.com</span>
              </a>
            </li>
          </ul>
          <h5 class="text-decoration-underline text-warning mt-4 mb-3">Find Us On Map</h5>
          <div class="w-100">
            <div class="mapouter">
              <div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
                <style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    height: 200px;
                    width: 100%;
                  }
                </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                <style>
                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 200px;
                    width: 100%;
                  }
                </style>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 pt-4 pt-sm-0">
          <h4 class="pb-5 f_ti">Latest Blog</h4>
          <ul>
            <li class="border-bottom pb-4">
              <p class="fw-bold">Tout Terrain gold city</p>
              <span>In Motobike</span> &nbsp;<span class="text-muted">August 15 2018</span>
            </li>
            <li class="border-bottom pb-4">
              <p class="fw-bold">Car driving a tunnel</p>
              <span>In Car</span> &nbsp;<span class="text-muted">August 15 2018</span>
            </li>
            <li>
              <p class="fw-bold">How to drive a car</p>
              <span>In Car</span> &nbsp;<span class="text-muted">August 15 2018</span>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 pt-4 pt-lg-0">
          <h4 class="pb-5 f_ti ">Usefull Links</h4>
          <ul>
            <li>
              <span class="text-muted">Our Partners</span>
            </li>
            <li>
              <span class="text-muted">Carrers</span>
            </li>
            <li>
              <span class="text-muted">Sitemap</span>
            </li>
            <li>
              <span class="text-muted">Investors</span>
            </li>
            <li>
              <span class="text-muted">Request a Quote</span>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 pt-4 pt-lg-0">
          <h4 class="pb-5 f_ti">Working Hours</h4>
          <ul>
            <li class="border-bottom pb-4">
              <p class="fw-bold mb-4">SALES DEPARTMENT:</p>
              <p class="text-muted">Monday to Friday:08.00 to 18.00</p>
              <p class="text-muted">Monday to Friday:08.00 to 18.00</p>
            </li>
            <li>
              <p class="fw-bold mb-4">SALES DEPARTMENT:</p>
              <p class="text-muted">Monday to Friday:08.00 to 18.00</p>
              <p class="text-muted">Monday to Friday:08.00 to 18.00</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer_bot mt-5">
        <div class="social mx-auto px-0 px-sm-5 text-center">
          <a href="" target="" class="fb btn btn-primary mx-0 mx-sm-2 px-4 py-2">Facebook</a>
          <a href="" class="twi btn btn-primary mx-0 mx-sm-2 px-4 py-2 mt-2 mt-sm-0">Twitter</a>
          <a href="" class="you btn btn-primary mx-0 mx-sm-2 px-4 py-2 mt-2 mt-sm-0">Youtube</a>
          <!-- <a href="" class="goog btn btn-primary mx-0 mx-sm-2 px-4 py-2 mt-2 mt-sm-0">Google+</a>
          <a href="" class="rss btn btn-primary mx-0 mx-sm-2 px-4 py-2 mt-2 mt-sm-0">Rss Feed</a> -->
        </div>
      </div>
      <div class="copy text-center pt-5">
        <p class="text-muted">Website by <a class="text-muted" target="_blank" href="mozita.digital">Mozita Digital</a></p>
      </div>
    </div>
  </div>
  <!-- script -->
  <script src="{{ asset('assets/js/script.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#category').on('change', function(e) {
        console.log(e);
        var cat_id = e.target.value;
        //console.log(cat_id);
        //ajax
        $.get('/ajax-subcat?cat_id=' + cat_id, function(data) {
          //success data
          console.log(data);
          var subcat = $('#subcategory').empty();
          $.each(data, function(create, subcatObj) {
            var option = $('<option/>', {
              id: create,
              value: subcatObj
            });
            subcat.append('<option value ="' + subcatObj['id'] + '">' + subcatObj['model'] + '</option>');
          });
        });
      });
    });
  </script>
</body>

</html>