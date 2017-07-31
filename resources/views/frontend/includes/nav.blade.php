<nav class="navbar fixed-top navbar-toggleable-md navbar-light other-page" id="mainNav">
   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
       Menu <i class="fa fa-bars"></i>
   </button>
   <div class="container">
       <a class="navbar-brand" href="{{ route('frontend.index') }}">{{ app_name() }}</a>
       <div class="collapse navbar-collapse" id="navbarExample">
           <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('frontend.quiz.boards') }}" class='{{  active_class(Active::checkRoute('frontend.quiz.boards')) }}'>Boards</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#subjects">Subjects</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#study_materials">Study Materials</a>
               </li>
               @if ( $logged_in_user)
                <li class="nav-item">
                    <a class="nav-link" href="#study_materials">{{ $logged_in_user->name }} <span class="caret"></span></a>
                </li>
               @endif
               @if (! $logged_in_user)
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('frontend.auth.login') }}" class='{{  active_class(Active::checkRoute('frontend.auth.login')) }}'>Login</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('frontend.auth.register') }}" class='{{  active_class(Active::checkRoute('frontend.auth.register'))}}'>Register</a>
                   </li>
               @endif
           </ul>
       </div>
   </div>
</nav>