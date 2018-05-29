<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
                    aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home_path') }}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active_route('home_path') }}"><a href="{{ route('home_path') }}">Accueil</a></li>
                <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">À Propos</a></li>
                <li class="{{ set_active_route('artisans_path') }}"><a href="{{ route('artisans_path') }}">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false">Planète <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="//laravel.com" target="_blank">Laravel.com</a></li>
                        <li><a href="//laravel.io" target="_blank">Laravel.io</a></li>
                        <li><a href="//laracasts.com" target="_blank">Laracasts</a></li>
                        <li><a href="//larajobs.com" target="_blank">Larajobs</a></li>
                        <li><a href="//laravel-news.com" target="_blank">Laravel News</a></li>
                        <li><a href="//larachat.co" target="_blank">Larachat</a></li>
                    </ul>
                </li>
                <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path') }}">Contact</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="{{ set_active_route('login') }}"><a href="{{ route('login') }}">Connexion</a></li>
                    <li class="{{ set_active_route('register') }}"><a href="{{ route('register') }}">Inscription</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            <img src="{{ Gravatar::src(Auth::user()->email, 18) }}" class="img-rounded">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('account_path') }}"><i class="text-info fa fa-user"></i> Mon profil</a></li>
                            <li><a href="{{ route('edit_account_path') }}"><i class="fa fa-edit"></i> Editer mon profil</a></li>
                            <li><a href="{{ route('new_password_path') }}"><i class="text-success fa fa-unlock-alt"></i> Changer mon mot de passe</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="text-danger fa fa-sign-out"></i>
                                    Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>