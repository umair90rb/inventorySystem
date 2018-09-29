<!DOCTYPE html>
<html>
<title>{{ config('app.name') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/mdbootstrap.css') }}">
<style>
html,
body,
header,
#intro {
    height: 100%;
}

#intro {
    background: url("{{asset('uploads/img/f1.jpg')}}")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.top-nav-collapse {
  background-color: #24355C;
}
@media (max-width: 768px) {
  .navbar:not(.top-nav-collapse) {
    background-color: #24355C;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  .navbar:not(.top-nav-collapse) {
    background-color: #24355C;
  }
}
</style>
<body>

<!--Main Navigation-->
<header>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

<div class="container">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">{{config('app.name')}}</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="#intro">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#best-features">Features</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#examples">Examples</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
    </li>
</ul>
<!-- Links -->

   <!-- Social Icon  -->
<ul class="navbar-nav nav-flex-icons">
    <li class="nav-item">
        <a class="nav-link"><i class="fa fa-facebook"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link"><i class="fa fa-twitter"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link"><i class="fa fa-instagram"></i></a>
    </li>
</ul>

</div>

</nav>
<!--/.Navbar-->
<!--Mask-->
<div id="intro" class="view">

    <div class="mask rgba-black-strong">

        <div class="container-fluid d-flex align-items-center justify-content-center h-100">

            <div class="row d-flex justify-content-center text-center">

                <div class="col-md-12">

                    <!-- Heading -->
                    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">{{config('app.name')}}</h2>

                    <!-- Divider -->
                    <hr class="hr-light">

                    <!-- Description -->
                    <h4 class="white-text my-4">Our work is the presentation of our capabilities.</h4>
                    <!-- <button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button> -->

                </div>

            </div>

        </div>

    </div>

</div>
<!--/.Mask-->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="mt-5">
    <div class="container">

        <!--Section: Best Features-->
<section id="best-features" class="text-center">

<!-- Heading -->
<h2 class="mb-5 font-weight-bold">Best Features</h2>

<!--Grid row-->
<div class="row d-flex justify-content-center mb-4">

    <!--Grid column-->
    <div class="col-md-8">

        <!-- Description -->
        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic provident nulla repellat
            facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis est
            sit pariatur.</p>

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

<!--Grid row-->
<div class="row">

    <!--Grid column-->
    <div class="col-md-4 mb-5">
        <i class="fa fa-globe fa-4x orange-text"></i>
        <h4 class="my-4 font-weight-bold">Web Based</h4>
        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
            assumenda deleniti hic.</p>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 mb-1">
        <i class="fa fa-support fa-4x orange-text"></i>
        <h4 class="my-4 font-weight-bold">24/7 Support</h4>
        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
            assumenda deleniti hic.</p>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 mb-1">
        <i class="fa fa-shield fa-4x orange-text"></i>
        <h4 class="my-4 font-weight-bold">Secure</h4>
        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
            assumenda deleniti hic.</p>
    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Section: Best Features-->

        <hr class="my-5">

        <!--Section: Examples-->
<section id="examples" class="text-center">

<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-lg-4 col-md-12 mb-4">

    <div class="view overlay z-depth-1-half">
      <img src="{{asset('uploads/img/g1.jpg')}}" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <h4 class="my-4 font-weight-bold">For You</h4>
    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
      aperiam minima
      assumenda deleniti hic.</p>

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

    <div class="view overlay z-depth-1-half">
      <img src="{{asset('uploads/img/g2.jpg')}}" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <h4 class="my-4 font-weight-bold">Cloud Based</h4>
    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
      aperiam minima
      assumenda deleniti hic.</p>

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

    <div class="view overlay z-depth-1-half">
      <img src="{{asset('uploads/img/g3.jpg')}}" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <h4 class="my-4 font-weight-bold">Perfect for Small Business</h4>
    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
      aperiam minima
      assumenda deleniti hic.</p>

  </div>
  <!--Grid column-->

</div>
<!--Grid row-->

<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-lg-4 col-md-12 mb-4">

    <div class="view overlay z-depth-1-half">
      <img src="{{asset('uploads/img/g4.jpg')}}" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <h4 class="my-4 font-weight-bold">24/7 Support</h4>
    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
      aperiam minima
      assumenda deleniti hic.</p>

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

    <div class="view overlay z-depth-1-half">
      <img src="{{asset('uploads/img/g5.jpg')}}" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <h4 class="my-4 font-weight-bold">Make Business Management Easy</h4>
    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
      aperiam minima
      assumenda deleniti hic.</p>

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-4">

    <div class="view overlay z-depth-1-half">
      <img src="{{asset('uploads/img/g6.jpg')}}" class="img-fluid">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <h4 class="my-4 font-weight-bold">Perfect Data, Perfect Strategy</h4>
    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
      aperiam minima
      assumenda deleniti hic.</p>

  </div>
  <!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Section: Examples-->

        <hr class="my-5">

       <!--Section: Gallery-->
<section id="gallery">

<!-- Heading -->
<h2 class="mb-5 font-weight-bold text-center">{{config('app.name')}}</h2>

<!--Grid row-->
<div class="row">

   <!--Grid column-->
<div class="col-md-6 mb-4">

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('uploads/img/c1.jpg')}}" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('uploads/img/c2.jpg')}}" alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('uploads/img/c3.jpg')}}" alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

</div>
<!--Grid column-->

    <!--Grid column-->
<div class="col-md-6">

<!--Excerpt-->
<a href="" class="teal-text">
    <h6 class="pb-1"><i class="fa fa-camera"></i><strong> {{"System Screenshot" }} </strong></h6>
</a>
<h4 class="mb-3"><strong>This is title of the news</strong></h4>
<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
    debitis aut rerum.</p>

<p>by <a><strong>{{config('app.name')}}</strong></a>, {{\Carbon\Carbon::now()->toFormattedDateString()}}</p>
<a class="btn btn-primary btn-md">Read more</a>

</div>
<!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Section: Gallery-->
        <hr class="my-5">

        <!--Section: Contact-->
<section id="contact">

<!-- Heading -->
<h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

<!--Grid row-->
<div class="row">

<!--Grid column-->
<div class="col-lg-5 col-md-12">
  <!-- Form contact -->
  <form class="p-5 grey-text">
    <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
      <input type="text" id="form3" class="form-control form-control-sm">
      <label for="form3">Your name</label>
    </div>
    <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
      <input type="text" id="form2" class="form-control form-control-sm">
      <label for="form2">Your email</label>
    </div>
    <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
      <input type="text" id="form32" class="form-control form-control-sm">
      <label for="form34">Subject</label>
    </div>
    <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
      <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
      <label for="form8">Your message</label>
    </div>
    <div class="text-center mt-4">
      <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
    </div>
  </form>
  <!-- Form contact -->
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-lg-7 col-md-12">
<!--Grid row-->
<div class="row text-center">

  <!--Grid column-->
  <div class="col-lg-4 col-md-12 mb-3">

      <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Faisalabad, Pakistan</p>

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-3">

      <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-4 col-md-6 mb-3">

      <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 01 234 567 89</p>

  </div>
  <!--Grid column-->

</div>
<!--Grid row-->
<!--Google map-->
                    <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px">
                        <iframe style="height: 100%; width: 100%; border: 0px;"  src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6815.497436208558!2d73.15076821213923!3d31.33831207656361!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1538214430571"  allowfullscreen></iframe>
                    </div>
<!--Grid column-->

</div>
<!--Grid row-->

</section>
<!--Section: Contact-->

    </div>
</main>
<!--Main layout-->


<!-- Footer -->
<footer class="page-footer unique-color-dark">

<!-- Social buttons -->
<div class="primary-color">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>
    <!-- Social buttons -->

    <!--Footer Links-->
<div class="container mt-5 mb-4 text-center text-md-left">
    <div class="row mt-3">

        <!--First column-->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
            <h6 class="text-uppercase font-weight-bold">
                <strong>{{config('app.name')}}</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                amet, consectetur adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <!--Second column-->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Products</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a href="#!">{{config('app.name')}}</a>
            </p>
            <p>
                <a href="#!">Mobile App</a>
            </p>
            <p>
                <a href="#!">24/7 Support</a>
            </p>
            <p>
                <a href="#!">Help</a>
            </p>
        </div>
        <!--/.Second column-->

        <!--Third column-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Useful links</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a href="#!">Your Account</a>
            </p>
            <p>
                <a href="#!">Become an Affiliate</a>
            </p>
            <p>
                <a href="#!">Some link</a>
            </p>
            <p>
                <a href="#!">Help</a>
            </p>
        </div>
        <!--/.Third column-->

        <!--Fourth column-->
        <div class="col-md-4 col-lg-3 col-xl-3">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Contact</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <i class="fa fa-home mr-3"></i>  {{config('app.name')}} </p>
            <p>
                <i class="fa fa-envelope mr-3"></i> info@example.com</p>
            <p>
                <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
            <p>
                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!--/.Fourth column-->

    </div>
</div>
<!--/.Footer Links-->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> {{config('app.name')}}</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<script type="text/javascript" src="{{ asset('js/mdbootstrap.js') }}"></script>
<!-- Carousel options -->
<script>
  $('.carousel').carousel({
    interval: 100,
  })
</script>
<script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();
        
                // Store hash
                var hash = this.hash;
        
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                scrollTop: $(hash).offset().top
                }, 800, function(){
            
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
                });
            } // End if
            });
        });
    </script>
</body>
</html>