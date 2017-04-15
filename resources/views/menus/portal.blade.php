
  {{-- @foreach ($items as $menu_item)
    <li>
      <a href="{{ $menu_item ->url }}">{{ $menu_item->title }}</a>
    </li>
  @endforeach
</ul> --}}

@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else
  <ul class="nav navbar-nav navbar-right">
  @foreach ($items as $menu_item)
    <li>
      <a href="{{ $menu_item ->url }}">{{ $menu_item->title }}</a>
    </li>
  @endforeach
</ul>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->firstname->lastname }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
              <a href="{{ 'portal.profile' }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Profile
              </a>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif
