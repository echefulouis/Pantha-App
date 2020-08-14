
   <nav
      class="navbar navbar-expand-lg navbar-expand-sm bg-light fixed-top shadow"
    >
      <a class="navbar-brand logo" href="{{route('home')}}">
        <img src="{{asset('assets/img/head-logo.svg')}}" alt="image"
      /></a>
      <div class="menu-btn">
        <div class="menu-btn__burger"></div>
      </div>
      <div class="navbar-collapse nav" id="navbarResponsive">
        <ul class="navbar-nav ml-auto pagination" id="ham">
          <li class="nav-item active">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}"><img src="{{asset('assets/img/person-icon.svg')}}" alt=""></a>
          </li>
          @endauth
        </ul>
      </div>
    </nav>