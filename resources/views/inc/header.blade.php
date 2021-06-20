
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
          <i class="icofont-envelope"></i><a href="mailto:infos@vehistoric.com">infos@carrymyluggage.com</a>
          <i class="icofont-phone"></i> +237 697 662 979
        </div>
        <div class="social-links">
            <a href="#" class="twitter">
              @if(Route::has('login'))
              @auth
              <li><a href="{{ url('/home') }}">{{ __('phrase.Dashboard')}}</a></li>
              @else
            </a>
                <a href="" class=""><i class="icofont-user"></i>Connexion</a>
                <a class="btn btn-sm p-1 bg-green" href="" role="button"><i class="icofont-user mr-1"></i>Inscription</a>
              @endauth
            @endif
              
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
              @php $locale = session()->get('locale'); @endphp
                @switch($locale)
                    @case('en')
                    <img src="{{asset('img/flag.svg')}}" width="30px" height="20x">
                    @break
                    @default
                    <img src="{{asset('img/france.svg')}}" width="30px" height="20x">
                @endswitch
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="">
                <a class="dropdown-item" href=""><img src="{{asset('img/france.svg')}}" width="30px" height="20x"> 
                FR</a>
                <a class="dropdown-item" href=""><img src="{{asset('img/flag.svg')}}" width="30px" height="20x"> 
                EN</a>
              </div>
        </div>
    </div>
  </section>
  
  <!-- ======= Header ======= -->
  <header>
    <div class="container d-flex">
  
      <div class="logo mr-auto">
        <a href="{{ url('/') }}"> <img src="{{asset('front-end/assets/img/logo_small_a2.png')}}"> </a>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
    
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Accueil</a></li>
          
          <li><a href="">Contact</a></li>
          
    
        </ul>
      </nav><!-- .nav-menu -->
    
    </div>
  </header><!-- End Header -->
  