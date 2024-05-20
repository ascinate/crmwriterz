<aside class="main-sliderbar">
    <div class="menu-slidebar position-relative">
      <div class="top-bars d-flex align-items-start">
        <button class="navbar-toggler text-white p-0 border-0 d-block" type="button" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </button>

        @php
                if(session('role')=='Administrator')
                {
            @endphp
        <a href="{{ URL::to('tasks') }}" class="logo-dash">
          <img alt="logo" src="{{ asset('images/logobi.png') }}" class="logn"/>
        </a>
        @php
    } else {
        @endphp
        <a href="{{ URL::to('usertasks') }}" class="logo-dash">
          <img alt="logo" src="{{ asset('images/logobi.png') }}" class="logn"/>
        </a>
        @php
    }
        @endphp
      </div>
        <ul class="silder-menu">

            @php
                if(session('role')=='Administrator')
                {
            @endphp
            <li>
            <a href="{{ URL::to('tasks') }}" class="link05 active-me">
                <span class="txet-men06"> Tasks and Projects </span>
            </a>
            </li>

                <li>
                    <a href="{{ URL::to('users') }}" class="link05">
                    <span class="txet-men06"> Manage Users </span>
                    </a>
                </li>

                <li>
                    <a href="{{ URL::to('webmail') }}" class="link05">
                    <span class="txet-men06"> Manage Webmail </span>
                    </a>
                </li>
            @php
                }
                else
                {
            @endphp
            <li>
            <a href="{{ URL::to('usertasks') }}" class="link05 active-me">
                <span class="txet-men06"> Tasks and Projects </span>
            </a>
            </li>
            @php
                }
            @endphp
        </ul>
    </div>
  </aside>
