@extends('layouts/master_layout', ['title' => 'Inscription'])

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Faites partie de la communauté !!!</h3>
                    </div>
                </div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                    <label class="control-label" for="username"><span class="text-danger">*</span> Nom d'utilisateur</label>
                                    <input type="text" name="username" value="{{ old('username') }}" id="username" class="form-control" required>
                                    {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label class="control-label" for="name"><span class="text-danger">*</span> Nom et Prénom(s)</label>
                                    <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label class="control-label" for="email"><span class="text-danger">*</span> Adresse électronique</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                    <label class="control-label" for="address"><span class="text-danger">*</span> Adresse géographique</label>
                                    <span class="help-text">(pour la carte)</span>
                                    <input type="text" name="address" id="address" value="{{ old('address') }}" id="address" class="form-control" required>
                                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label class="control-label" for="password"><span class="text-danger">*</span>  Mot de passe</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                    <label class="control-label" for="password_confirmation"><span class="text-danger">*</span>  Confirmer le mot de passe</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 {{ $errors->has('website') ? 'has-error' : '' }}">
                                <div class="form-group">
                                    <label class="control-label" for="website">Site Web / Blog</label>
                                    <span class="help-text">(Commençant par http:// ou https://)</span>
                                    <input type="url" name="website" id="website" value="{{ old('website') }}" class="form-control">
                                    {!! $errors->first('website', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('github') ? 'has-error' : '' }}">
                                    <label class="control-label" for="github">Profil Github</label>
                                    <span class="help-text">(Commençant par http:// ou https://)</span>
                                    <input type="url" name="github" id="github" value="{{ old('github') }}" class="form-control">
                                    {!! $errors->first('github', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="#" class="btn btn-primary"><i class="fa fa-github"></i> Se connecter avec Github</a>
                            <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i> S'inscrire</button>
                        </div>

                    </form>

                    <a href="{{ route('login') }}">Vous avez déjà un compte? Connectez vous!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Inscrivez vous dès à présent</h3>
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