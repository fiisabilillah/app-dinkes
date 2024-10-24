  <header id="home">

      <!-- Start Navigation -->
      <nav class="navbar navbar-default attr-border active-border small-pad navbar-sticky bootsnav">

          <!-- Start Top Search -->
          <div class="top-search">
              <div class="container">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                  </div>
              </div>
          </div>
          <!-- End Top Search -->

          <div class="container">

              <!-- Start Atribute Navigation -->
              <div class="attr-nav">
                  <ul>
                      <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                      <li class="side-menu"><a href="#"><i class="fas fa-bars"></i></a></li>
                  </ul>
              </div>
              <!-- End Atribute Navigation -->

              <!-- Start Header Navigation -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                      <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="/">
                      <img src="{{ asset('frontend/assets/img/logo-jambi.png')}}" class="logo" alt="Logo">
                  </a>
              </div>
              <!-- End Header Navigation -->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                      <!-- <li class="dropdown">
                          <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                          <ul class="dropdown-menu">
                              <li><a href="it-solution.html">It Solution <span class="badge">New</span></a></li>
                              <li><a href="index.html">Home Version One</a></li>
                              <li><a href="index-2.html">Home Version Two</a></li>
                              <li><a href="index-3.html">Home Version Three</a></li>
                              <li><a href="index-4.html">Home Version Four</a></li>
                              <li><a href="index-5.html">Home Version Five</a></li>
                              <li><a href="index-op.html">Onepage Version One</a></li>
                              <li><a href="index-op-2.html">Onepage Version Two</a></li>
                          </ul>
                      </li> -->
                      <li>
                          <a href="contact.html">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('register') }}">Register</a>
                      </li>
                      <li>
                          <a href="{{ route('login') }}">Login</a>

                      </li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </div>

          <!-- Start Side Menu -->
          <div class="side">
              <a href="#" class="close-side"><i class="fas fa-times"></i></a>
              <div class="widget">
                  <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="Logo">
                  <p>
                      Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                  </p>
              </div>
              <div class="widget contact address">
                  <div>
                      <ul>
                          <li>
                              <div class="content">
                                  <p>ADDRESS</p><strong>California, TX 70240</strong>
                              </div>
                          </li>
                          <li>
                              <div class="content">
                                  <p>EMAIL</p><strong>support@validtheme.com</strong>
                              </div>
                          </li>
                          <li>
                              <div class="content">
                                  <p>PHONE</p><strong>+44-20-7328-4499</strong>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="widget contact newsletter">
                  <h4 class="title">Get Subscribed!</h4>
                  <form action="#">
                      <div class="input-group stylish-input-group">
                          <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                          <span class="input-group-addon">
                              <button type="submit">
                                  <i class="fas fa-long-arrow-alt-right"></i>
                              </button>
                          </span>
                      </div>
                  </form>
              </div>
              <div class="widget social">
                  <ul class="link">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fab fa-behance"></i></a></li>
                  </ul>
              </div>
          </div>
          <!-- End Side Menu -->

      </nav>
      <!-- End Navigation -->

  </header>