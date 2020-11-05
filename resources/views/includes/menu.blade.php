<nav class="navbar navbar-expand-lg navbar-light "   style="background-color:	;">
  <img src='\images\logo.png' width="50">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          How can I Help?
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('share') }}">Share</a>
          <a class="dropdown-item" href="{{ url('savefood') }}">Save Food</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('volunteers') }}">Volunteers</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('contactus') }}">Contact us <span class="sr-only">(current)</span></a>
      </li>
      </ul>
      

    <tr>
    @if (Route::has('login'))
          @auth 
            <td class="nav-item" >
               <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
            </td>
            <td class="nav-item">
               <a class="nav-link" href="{{ url('/logout') }}">logout</a>
            </td>
            <td >
              <div class="dropdown">
                <button class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" >
                  <a class="dropdown-item"  href="{{ route('profile.show')}}">Profile</a>
                  <a class="dropdown-item"  href="{{ url('/mylist/') }}">Mylist</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item"  href="{{ url('/logout') }}">logout</a>
                </div>
              </div>
            </td>
          @else
            <td class="nav-item">
               <a class="nav-link" href="{{ url('login') }}">Login</a>
            </td>
            @if(Route::has('register'))
            <td class="nav-item">
               <a class="nav-link" href="{{ url('register') }}">Register</a>
             </td>
            @endif

          @endif
       @endif 
</tr>  
  </div>
  
</nav>

