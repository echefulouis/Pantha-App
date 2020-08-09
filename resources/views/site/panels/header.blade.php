    <nav
      class="navbar navbar-expand-lg navbar-expand-sm bg-light fixed-top shadow"
    >
      <a class="navbar-brand logo" href="#">
        <img src="{{asset('frontend/img/head-logo.svg')}}" alt="image"
      /></a>
      <div class="menu-btn">
        <div class="menu-btn__burger"></div>
      </div>
      <div class="navbar-collapse nav" id="navbarResponsive">
        <ul class="navbar-nav ml-auto pagination" id="ham">
          <li class="nav-item active">
            <a class="nav-link active" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile"><img src="{{asset('frontend/img/person-icon.svg')}}" alt=""></a>
          </li>
        </ul>
      </div>
    </nav>