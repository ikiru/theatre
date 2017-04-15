{{-- <ul class="nav navbar-nav navbar-right"> --}}

  @if (Route::has('login'))

      <div class="top-right links">
          @if (Auth::check())

              return view /portal/show'

          @else
          <ul class="nav navbar-nav navbar-right">
            @foreach ($items as $menu_item)
              <li>
                <a href="{{ $menu_item ->url }}">{{ $menu_item->title }}</a>
              </li>
            @endforeach
              <li>
                <a href="{{ url('/login') }}">Login</a>
              </li>
              <li>
                <a href="{{ url('/register') }}">Register</a>
              </li>
            </ul>
          @endif
      </div>
  @endif

</ul>
