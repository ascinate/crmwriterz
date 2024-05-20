<header class="dashboard-head float-start w-100">
    <div class="d-flex align-items-center justify-content-between justify-content-lg-start d-lg-none mt-4 mb-3">
       <button class="btn btn-golger p-0 text-white d-none d-lg-block">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
       </button>
        @php
            if(session('role')=='Administrator')
            {
        @endphp
        <a href="{{ URL::to('tasks') }}" class="logo-modile">
           <img alt="logo" class="d-none d-lg-block" src="{{ asset('images/logobi.png') }}"/>
           <img alt="logo"  class="d-block d-lg-none" src="{{ asset('images/logo-mob.png') }}"/>
        </a>
        @php
            }
            else
            {
        @endphp
        <a href="{{ URL::to('usertasks') }}" class="logo-modile">
           <img alt="logo" class="d-none d-lg-block" src="{{ asset('images/logobi.png') }}"/>
           <img alt="logo"  class="d-block d-lg-none" src="{{ asset('images/logo-mob.png') }}"/>
        </a>
        @php
           }
        @endphp
        <div class="user-menu05 d-block d-lg-none">
            <nav class="navbar navbar-expand navbar-light m-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item dropdown">
                      <a class="nav-link user-text d-flex align-items-center" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button"  aria-expanded="false">
                          <div class="piv-user">
                            <img alt="ser" src="{{ asset('images/user05.png') }}"/>
                          </div>
                      </a>
                      <ul class="dropdown-menu show-big08 dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                          <a data-bs-toggle="offcanvas" href="#accountui" role="button" class="user-name01-fullw05 d-flex align-items-center justify-content-between w-100">

                              <div class="left-divu-dropdown d-flex align-items-center">
                                <div class="imguser">
                                    <img alt="er" src="{{ asset('images/user01.svg') }}"/>
                                </div>
                                <h5> {{ session('username') }} </h5>
                              </div>
                              <p class="btn btnpor"> Profile </p>
                          </a>
                        </li>
                        <li>
                          <a href="{{ URL::to('logout') }}" class="logout d-flex align-items-center justify-content-between w-100">
                              <div class="left-divu-dropdown d-flex align-items-center">
                                <div class="imguser">
                                    <img alt="er" src="{{ asset('images/system-auth-form__icon-logout.svg') }}"/>
                                </div>
                                <h5> Log out </h5>
                              </div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>
    </div>
    </div>

    

    <div class="d-none d-lg-flex w-100 top-header align-items-center justify-content-start">
      <!--<div class="search-box d-none d-lg-flex align-items-center">
        <input type="text" class="form-control"/>
        <button type="submit" class="btn btn-search p-0">
          <i data-feather="search"></i>
        </button>
      </div>-->

      <div class="cloclp-div">
        <div id="clock" class="d-flex align-items-center text-white">
          <h2 class="unit" id="hours"></h2>
          <h2>:</h2>
          <h2 class="unit" id="minutes"></h2>
          <sup class="unit" id="ampm"></sup>
        </div>
      </div>

      <nav class="navbar navbar-expand navbar-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
              <li class="nav-item dropdown">
                <a class="nav-link user-text d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button"  aria-expanded="false">
                    <div class="piv-user">
                      <img alt="ser" src="{{ asset('images/user01.svg') }}"/>
                    </div>
                    <h5 class="text-white "> {{ session('username') }}</h5>
                </a>
                <ul class="dropdown-menu show-big08 dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li>
                    <a data-bs-toggle="offcanvas" href="#accountui" role="button" class="user-name01-fullw05 d-flex align-items-center justify-content-between w-100">

                        <div class="left-divu-dropdown d-flex align-items-center">
                          <div class="imguser">
                              <img alt="er" src="{{ asset('images/user01.svg') }}"/>
                          </div>
                          <h5> {{ session('username') }} </h5>
                        </div>
                        <p class="btn btnpor"> Profile </p>
                    </a>
                  </li>
                  <li>
                    <a href="{{ URL::to('logout') }}" class="logout d-flex align-items-center justify-content-between w-100">
                        <div class="left-divu-dropdown d-flex align-items-center">
                          <div class="imguser">
                              <img alt="er" src="{{ asset('images/system-auth-form__icon-logout.svg') }}"/>
                          </div>
                          <h5> Log out </h5>
                        </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>

    </div>
  </header>

  <div class="mobile-menu-fiexed d-block d-lg-none">
   <div class="conatiner">
      <ul class="silder-menu">

      @php
          if(session('role')=='Administrator')
          {
      @endphp
      <li>
      <a href="{{ URL::to('tasks') }}" class="link05 active-me">
          <span class="d-block"> <i data-feather="layers"></i> </span>
          <span class="txet-men06"> Tasks and Projects </span>
      </a>
      </li>

          <li>
              <a href="{{ URL::to('users') }}" class="link05">
              <span class="d-block"> <i data-feather="users"></i> </span>
              <span class="txet-men06"> Manage Users </span>
              </a>
          </li>

          <li>
              <a href="{{ URL::to('webmail') }}" class="link05">
              <span class="d-block"> <i data-feather="mail"></i> </span>
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
 </div>