@section('header')
<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Logo Start -->
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="Logo" />
          </a>
          <!-- Logo End -->

          <!-- Main Menu start -->
          <div class="collapse navbar-collapse main-menu">
            <ul class="navbar-nav mr-auto" id="menu">
              <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="property-single.html">Properties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About us</a>
              </li>
              <li class="nav-item highlighted-menu">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
          <!-- Main Menu End -->

          <div class="navbar-toggle"></div>
        </div>
      </nav>

      <div class="responsive-menu"></div>
    </div>
  </header>
  <!-- Header End -->
  @endsection