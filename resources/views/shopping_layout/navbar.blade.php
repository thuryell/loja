<header class="site-navbar" role="banner">
        <div class="site-navbar-top">
          <div class="container">
            <div class="row align-items-center">

              <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <form action="" class="site-block-top-search">
                  <span class="icon icon-search2"></span>
                  <input type="text" class="form-control border-0" placeholder="Search">
                </form>
              </div>

              <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                <div class="site-logo">
                  <a href="index.html" class="js-logo-clone">Lojas Athlas</a>
                </div>
              </div>

              <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                <div class="site-top-icons">
                  <ul>
                      @if (auth()->check())
                      <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" width="30" height="30" src="https://pbs.twimg.com/profile_images/1116472851240906753/PwSA0Pj__400x400.jpg">
                            </a>
                            <!-- Dropdown - User Information -->

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="#">Meus dados</a>
                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{-- {{ __('Logout') }} --}}
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                              </a>
                            </div>
                            </li>
                      @else
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="width:200px">
                                    <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                    <div class="form-group">
                                        <small class="form-text text-muted">Email</small>
                                        <input type="email" style="width:95%;height:25px" name="email" class="form-control mx-auto"  aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <small class="form-text text-muted">Senha</small>
                                        <input type="password" style="width:95%;height:25px" name="password" class="form-control mx-auto"  aria-describedby="emailHelp">
                                    </div>

                                        <input type="submit" style="width:100%" class="mx-auto btn btn-primary" value="Login">

                                </form>
                            </div>

                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Register</a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="width:200px">
                                <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                <div class="form-group">
                                    <small class="form-text text-muted">Nome</small>
                                    <input type="text" style="width:95%;height:25px" name="name" class="form-control mx-auto"  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <small class="form-text text-muted">Email</small>
                                    <input type="email" style="width:95%;height:25px" name="email" class="form-control mx-auto"  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <small class="form-text text-muted">Senha</small>
                                    <input type="password" style="width:95%;height:25px" name="password" class="form-control mx-auto"  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <small class="form-text text-muted">Senha</small>
                                    <input type="password" style="width:95%;height:25px" name="password_confirmation" class="form-control mx-auto"  aria-describedby="emailHelp">
                                </div>
                                    <input type="submit" style="width:100%" class="mx-auto btn btn-primary" value="Register">

                            </form>
                        </div>
                        </li>
                      @endif
                    <li class="nav-item dropdown no-arrow">
                        <a class="site-cart nav-link dropdown"data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        <span class="icon icon-shopping_cart"></span>
                        @if (session('cart'))
                            <span class="count">{{session('cart')}}</span>
                        @endif
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      </div>

                    </li>
                      <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
              <li class="active">
                <a href="{{Route('loja')}}">Home</a>
              </li>
              {{-- <li class="has-children">
                <a href="about.html">About</a>
                <ul class="dropdown">
                  <li><a href="#">Menu One</a></li>
                  <li><a href="#">Menu Two</a></li>
                  <li><a href="#">Menu Three</a></li>
                </ul>
              </li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="#">Catalogue</a></li>
              <li><a href="#">New Arrivals</a></li>
              <li><a href="contact.html">Contact</a></li> --}}
            </ul>
          </div>
        </nav>
      </header>
