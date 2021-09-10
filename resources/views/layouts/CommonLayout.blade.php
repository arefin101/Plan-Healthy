<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#"><b>Plan Healthy</b></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navb" class="navbar-collapse collapse hide">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('appointment') }}">Doctor's Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('covid') }}">Covid-19</a>
        </li>
    </ul>
   

    <ul class="nav navbar-nav ml-auto">
        @if(Session::has('name'))
        <li class="nav-item">
            <a class="btn btn-danger" href="{{ route('logout') }}"><span class="fas fa-sign-in-alt"></span>Logout</a>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-info" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
        @endif
    </ul>
  </div>
</nav>