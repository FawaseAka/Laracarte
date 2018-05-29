@extends('layouts/master_layout', ['title' => 'Mise à jour de profil'])

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-ofsset-1">

            <h3>Mise à jour de profil - {{ $user->name }}</h3>

            {!! Form::model($user, ['route' => 'account_path', 'method' => 'PATCH', 'files' => true]) !!}

                <div class="row">
                    <div class="col-md-6 col-md-offset-6 text-right">
                        <div class="form-group {{ $errors->has('available_for_hire') ? 'has-error' : '' }}">
                            <label class="control-label text-info">
                            {!! Form::hidden('available_for_hire', 0) !!}
                            {!! Form::checkbox('available_for_hire', 1) !!} Je suis disponible pour emploi</label>
                            {!! $errors->first('available_for_hire', '<span class="text-danger">:message</span>') !!}
                        </div>
                    </div>
                </div>

                <fieldset>
                    <legend class="text-warning"><i class="fa fa-lock"></i> Informations Personnelles <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-up"></i></span></a></legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('name', 'Nom complet', ['class' => 'control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                {!! Form::label('address', 'Adresse géographique', ['class' => 'control-label']) !!}
                                <span class="help-text">(pour la carte)</span>
                                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('address', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::label('email', 'Adresse Email', ['class' => 'control-label']) !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                {!! Form::label('username', 'Nom d\'utilisateur', ['class' => 'control-label']) !!}
                                {!! Form::text('username', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('username', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                </fieldset>

                <br>
                <br>

                <fieldset class="hide-by-default">
                    <legend class="text-warning"><i class="fa fa-globe"></i> Où pouvons-nous vous trouver sur le net ? <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-down"></i></span></a></legend>
                    <div class="row">
                        <div class="col-md-6 {{ $errors->has('website') ? 'has-error' : '' }}">
                            <div class="form-group">
                                {!! Form::label('website', 'Site web / Blog', ['class' => 'control-label']) !!}
                                <span class="help-text">(Commençant par http:// ou https://)</span>
                                {!! Form::url('website', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('website', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('github') ? 'has-error' : '' }}">
                                {!! Form::label('github', 'Profil Github', ['class' => 'control-label']) !!}
                                <span class="help-text">(Commençant par http:// ou https://)</span>
                                {!! Form::url('github', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('github', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                                {!! Form::label('twitter', 'Profil Twitter', ['class' => 'control-label']) !!}
                                <span class="help-text">(Commençant par http:// ou https://)</span>
                                {!! Form::url('twitter', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('twitter', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                </fieldset>

                <br>
                <br>

                <fieldset class="hide-by-default">
                    <legend class="text-warning"><i class="fa fa-file"></i> Dites-nous plus à propos de vous <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-down"></i></span></a></legend>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                                {!! Form::label('avatar', 'Image de profil', ['class' => 'control-label']) !!}
                                {!! Form::file('avatar') !!}
                                {!! $errors->first('avatar', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
                                {!! Form::label('bio', 'Biographie', ['class' => 'control-label']) !!}
                                {!! Form::textarea('bio', null, ['class' => 'form-control', 'placeholder' => 'Vous pouvez utiliser Markdown pour styliser votre biographie', 'cols' => '10', 'rows' => '10']) !!}
                                {!! $errors->first('bio', '<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                </fieldset>

                <br>
                <br>

                <fieldset class="hide-by-default">
                    <legend class="text-warning"><i class="fa fa-star"></i> Quelles sont vos compétences ? <a href="#" class="text-warning slider-arrow"><span class="pull-right"><i class="fa fa-chevron-down"></i></span></a></legend>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('laravel', 'Laravel', ['class' => 'control-label']) !!}
                                {!! Form::selectRange('laravel', 1, 100, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('frontend', 'Frontend', ['class' => 'control-label']) !!}
                                {!! Form::selectRange('frontend', 1, 100, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('backend', 'Backend', ['class' => 'control-label']) !!}
                                {!! Form::selectRange('backend', 1, 100, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('mobile', 'Mobile', ['class' => 'control-label']) !!}
                                {!! Form::selectRange('mobile', 1, 100, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </fieldset>

                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check"></i> Enregistrer les modifications</button>
                </div>
            
            {!! Form::close() !!}
            
        </div>
    </div>
</div>

@stop