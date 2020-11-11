
<div class="card col-12"  style="border:none; background-color:	#FFFFFF;" >
  <div class="card-header" style="border:none; background-color:	#FFFFFF;">
  
   <h3> </h3>
  </div>
</div>
<!-- <div class="card-body">

  
      <div class="row" style="float: left;">
      <ul>
        <div class="col">
        <h5 class="card-title text-uppercase">About us</h5>
        <br>
              <li> <img src='\images\phone.png' height="" width="15px" '>
              091234567</li>
              <br>
              
              <li><img src='\images\mail.png' height="" width="15px" '>
              a001@gmail.com</li>
              <br>
              <li><img src='\images\place.png' height="" width="15px" '>
              Takao</li>
        </div>
      </div>
      </ul>

          <div class="row" style="text-align:left">
          <div class="col-30 " >
          &nbsp
          &nbsp
          &nbsp
          &nbsp 
          </div>

        <ul>
          <div style="white-space:none;" class="col-30">
          <h5 class="card-title text-uppercase">Sitemap</h5>
              <br>
              <li><a class="nav-link mb-2 text-uppercase" href="{{ url('/') }}">Home</a></li>
              <li><a class="nav-link mb-2 text-uppercase" href="{{ url('contactus') }}">Contact Us</a></li>
              <li><a class="nav-link mb-2 text-uppercase" href="{{ url('savefood') }}">Save food</a></li>

          </div>
        </ul>

        <ul>
          <div style="white-space:none;float:right" class="col-30">
          <h5 class="card-title text-uppercase">Company</h5>
              <br>
              <li>test</li>
              <br>
              <li>test</li>
              <br>
              <li>test</li>

          </div>
        </ul>


      </div>
    </div>
   </div>
   
</div> -->


  <!-- Footer Links -->
  <footer>
    <hr>
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Idea</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>We can see a lot of food wasted every day. However, what can we do to change the situation?
          
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Sitemap</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="/">Home</a>
        </p>
        <p>
          <a href="{{ url('share') }}">Share</a>
        </p>
        <p>
          <a href="{{ url('savefood') }}">Save food</a>
        </p>
        <p>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Account</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          @auth
            <a href="{{ url('profile') }}">My Account</a>
            @else
            <a href="{{ url('login') }}">Log in</a>
          @endif
          
        </p>
        <p>
          <a href="{{ url('register') }}">Register</a>
        </p>
        <p>
          @auth
          <a href="{{ url('mylist') }}">Requested products</a>
          @else
          <a href="{{ url('login') }}">Requested products</a>
          @endif
        </p>
        <p>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold"><a href="{{ url('contactus') }}" style="color: inherit;">Contact</a></h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
        <img src='\images\place.png' height="" width="15px" >
            <!-- <i class="fas fa-envelope mr-3"></i> -->
          KHH</p>
        <p>
        <img src='\images\mail.png' height="" width="15px" >
          <!-- <i class="fas fa-envelope mr-3"></i> -->
           info@example.com</p>
        <p>
        <img src='\images\phone.png' height="" width="15px" >
          <!-- <i class="fas fa-phone mr-3"></i>  -->
          + 886 234 567 88</p>
        <p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    Savefood
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<div class="social">

  <a class="social-icon" data-tooltip="email@gmail.com" href="mailto:email@gmail.com">
    <i class="fa fa-envelope" aria-hidden="true"></i>
  </a>

  <a class="social-icon" data-tooltip="GitHub" href="https://github.com/puikinsh">
    <i class="fa fa-github" aria-hidden="true"></i>
  </a>

  <a class="social-icon" data-tooltip="LinkedIn" href="https://www.linkedin.com/company/colorlib">
    <i class="fa fa-linkedin" aria-hidden="true"></i>
  </a>

  <a class="social-icon" data-tooltip="Twitter" href="https://twitter.com/colorlib">
    <i class="fa fa-twitter" aria-hidden="true"></i>
  </a>

  <a class="social-icon" data-tooltip="Facebook" href="https://www.facebook.com/colorlib">
    <i class="fa fa-facebook" aria-hidden="true"></i>
  </a>

  <a class="social-icon" data-tooltip="YouTube" href="https://www.youtube.com/c/Colorlib">
    <i class="fa fa-youtube" aria-hidden="true"></i>
  </a>
  <a class="social-icon" data-tooltip="YouTube" href="https://instagram.com/Colorlib">
    <i class="fa fa-instagram" aria-hidden="true"></i>
  </a>
  </div>
  <!-- Copyright -->
  


<!-- Footer -->


</div>
</footer>


