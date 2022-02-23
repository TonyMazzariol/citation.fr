<header>
  <div>
    <span>logo</span>
    <span>Citation.fr</span>
  </div>
  <nav>
    <ul>
      <li><a href="{{ route('Home') }}">Home</a></li>
      <li><a href="{{ route('Quotes') }}">Citations</a></li>
      <li><a href="{{ route('Authors') }}">Auteurs</a></li>
    </ul>
    <div class="">
      @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/home') }}" class="">Home</a>
              @else
                  <a href="{{ route('login') }}" class="">Se connecter</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="">S'enregistrer</a>
                  @endif
              @endauth
          </div>
      @endif
  </div>
  </nav>
</header>