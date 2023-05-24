<header>
    <div class="container d-flex justify-content-center ">
        <div class="logo bg-light">
            <img src="{{ Vite::asset('resources/img/logo.jpg')}}" alt=""  height="130">
            <h1 class="fw-lighter">Movies</h1>
        </div>
        
        
    </div>
    <div class="nav container d-flex">

        <nav class="nav">
          <a  class="nav-link text-dark {{ Route::currentRouteName() === 'home' ? 'bg-light border border-danger' : '' }}   " href="{{ route('home')}}">Home</a>
          <a  class="nav-link text-dark {{ Route::currentRouteName() === 'movies' ? 'bg-light border border-danger' : '' }}   " href="{{ route('movies')}}">Movies</a>
          <a class="nav-link text-dark {{ Route::currentRouteName() === 'contacts' ? 'bg-light border border-danger' : '' }}   " href="{{ route('contacts')}}"">Contacts</a>
        </nav>
    </div>
    
</header>