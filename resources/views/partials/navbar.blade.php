<nav class="navbar navbar-expand-lg navbar-light bg-white bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('public\images\logo1.png') }}" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link {{($title == 'Home')? 'active':''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{($title == 'Artikel')? 'active':''}}" href="/artikel">Artikel</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{($title == 'Gallery')? 'active':''}}" href="/gallery">Essai</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{($title == 'Gallery')? 'active':''}}" href="/gallery">Puisi</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{($title == 'Cerpen')? 'active':''}}" href="/cerpen">Cerpen</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{($title == 'Contact')? 'active':''}}" href="/contact">Contact</a>
          </li>
      </ul>      
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>