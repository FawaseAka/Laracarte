@extends('layouts/master_layout', ['title' => 'Contact'])

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>Entrer en contact</h2>

            <p class="text-muted">
                Si vous avez des problèmes avec ce service, s'il vous plaît 
                <a href="mailto:akafawase@gmail.com">demandez de l'aide</a>.   
            </p>

            <form action="{{ route('contact_path') }}" method="post">
                {{ csrf_field() }}
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <label for="name" class="control-label">Nom complet</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required="required">
                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label">Adresse Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required="required">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                    <label for="message" class="control-label">Votre message</label>
                    <textarea name="message" id="message" class="form-control" cols="10" rows="10" 
                        required="required">{{ old('message') }}</textarea>
                    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Soumettre la demande &raquo;</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop