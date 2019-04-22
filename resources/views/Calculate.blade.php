<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logistics &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyBoD51rv8pp0IlMu0LW_0IFqRs1Zipq-3I"  type="text/javascript"></script>

  <style type="text/css">
            html { height: 100% }
            body { height: 100%; margin: 0; padding: 0 }
            #map-canvas { height: 500px; width: 500px}
        </style>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoD51rv8pp0IlMu0LW_0IFqRs1Zipq-3I&sensor=SET_TO_TRUE_OR_FALSE"></script>
        <script type="text/javascript">
            function initialize() {
              var mapOptions = {
                center: new google.maps.LatLng(13.818858, 100.043335),
                zoom: 12
              };
              var map = new google.maps.Map(document.getElementById("map-canvas"),
                  mapOptions);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Logistics</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li class="has-children">
                  <a href="services">Services</a>
                  <ul class="dropdown">
                    <li><a href="#">Air Freight</a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Ground Shipping</a></li>
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Storage</a></li>
                  </ul>
                </li>
                <li><a href="industries">Industries</a></li>
                <li class="active"><a href="blog">Blog</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Our Blog</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
    <div class="container">
    <div class="row m-2">
  <div class="jumbotron" id="map-canvas" >
<h1>Calculate Distance</h1>
</div>
<div class="col-md-6 border">
<form id="distance_form">
<div class="form-group"><label>Origin: </label> <input class="form-control" id="from_places" placeholder="Enter a location" /> <input id="origin" name="origin" required="" type="hidden" /></div>

<div class="form-group"><label>Destination: </label> <input class="form-control" id="to_places" placeholder="Enter a location" /> <input id="destination" name="destination" required="" type="hidden" /></div>



<div class="form-group">
        <label for="type_car">ชนิดรถบรรทุก:</label>
        <select class="form-control" id="type" name="type">
          <option>กระบะ 4 ล้อหลังคาตู้ทึบ</option>
          <option>กระบะ 4 ล้อตะแกรงเหล็ก</option>
          <option>บรรทุก 10 ล้อหลังคาคู้ทึบ</option>
          <option>บรรทุก 10 ล้อตะแกรงไม้</option>
          <option>บรรทุก 10 ล้อ+เครื่องควบคุมอุณหภูมิสินค้า</option>
        </select>     
</div> 

<div class="form-group"><label>แรงงานที่ใช้(คน): </label> <input class="form-control" id="man" name="man" required="" type="number" /></div>

<input class="btn btn-primary" type="submit" value="Calculate" /></form>

<div id="result">
<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-center">ระยะทาง(ไมล์) :
        <span class="badge badge-primary badge-pill" id="in_mile">-</span>
    </li>
	<li class="list-group-item d-flex justify-content-between align-items-center">ระยะทาง(กิโลเมตร):
        <span class="badge badge-primary badge-pill" id="in_kilo">-</span>
    </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">ชนิดรถบรรทุก:
        <span class="badge badge-primary badge-pill" id="type_cars">-</span>
    </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">จำนวนแรงงาน(คน):
        <span class="badge badge-primary badge-pill" id="man_amount">-</span>
    </li>
	<li class="list-group-item d-flex justify-content-between align-items-center">IN TEXT:
        <span class="badge badge-primary badge-pill" id="duration_text">-</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">Price 1Km = 3 Bath:
        <span class="badge badge-primary badge-pill" id="price">-</span>
    </li>
	<li class="list-group-item d-flex justify-content-between align-items-center">IN MINUTES:
        <span class="badge badge-primary badge-pill" id="duration_value">-</span>
    </li>
	<li class="list-group-item d-flex justify-content-between align-items-center">FROM:
        <span class="badge badge-primary badge-pill" id="from">-</span>
    </li>
	<li class="list-group-item d-flex justify-content-between align-items-center">TO:
        <span class="badge badge-primary badge-pill" id="to">-</span>
    </li>
</ul>
</div>
</div>
</div>
</div>
  </div>
<script>
    $(function() {
        // add input listeners
        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });

        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var type = $('#type').val();
                    var man = $('#man').val();
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    var price = (distance.value / 1000) * 3;
                    $('#in_mile').text(distance_in_mile.toFixed(2)+" Miles");
                    $('#in_kilo').text(distance_in_kilo.toFixed(2)+" กิโลเมตร");
                    $('#type_cars').text(type);
                    $('#man_amount').text(man + " คน");
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                    $('#price').text(price.toFixed(2)+" Bath");
                }
            }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });

</script>




    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Products</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
