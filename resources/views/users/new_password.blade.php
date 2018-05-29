@extends('layouts/master_layout', ['title' => 'Mise à jour de mot de passe'])

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-ofsset-1">

            <h3 class="text-center">C'est une bonne idée de vouloir changer votre mot de passe</h3>

            <hr>

            <form method="POST" action="{{ route('new_password_path') }}">
                {!! csrf_field() !!}
                {!! method_field('PATCH') !!}

                <div class="form-group {{ $errors->has('current_password') ? 'has-error' : '' }}">
                    <label class="control-label">Mot de passe actuel</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" required="required">
                    {!! $errors->first('current_password', '<span class="text-danger">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
                    <label class="control-label">Nouveau mot de passe</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" required="required">
                    {!! $errors->first('new_password', '<span class="text-danger">:message</span>') !!}
                </div>

                <div class="form-group">
                    <label class="control-label">Confirmer le nouveau mot de passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="required">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i>&nbsp; Mettre à jour le mot de passe</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

@stop