@extends('layouts/master_layout', ['title' => 'Connexion'])

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Heureux de vous revoir !!!</h3>
                    </div>
                </div>
                <div class="panel-body">
                        
                    <form method="POST" action="{{ route('login') }}" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="control-label" for="email">Adresse électronique</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="control-label" for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            Se souvenir de moi
                        </div>

                        <div class="form-group">
                            <a href="#" class="btn btn-primary"><i class="fa fa-github"></i> Se connecter avec Github</a>
                            <a href="{{ route('password.request') }}" class="btn btn-danger">
                                <i class="fa fa-refresh"></i> Réinitialiser le mot de passe
                            </a>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-sign-in"></i> Connexion</button>
                        </div>
                    </form>

                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a> | <a href="{{ route('register') }}">Nouveau sur Laracarte? Créer un compte !</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Inscrivez vous gratuitement dès à présent</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Placez vous sur la carte</li>
                        <li>Faites partie de la communauté</li>
                    </ul>

                    <a href="http://laracarte.herokuapp.com/about">Lire la suite</a>
                </div>
            </div>            
        </div>
    </div>
</div>

@stop