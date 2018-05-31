@extends('layouts/master_layout', ['title' => 'À Propos'])

@section('content')
    
<div class="container">
    <h2>Qu'est-ce que {{ config('app.name') }}?</h2>

    <p>{{ config('app.name') }} est une application clone de <a target="_blank" href="https://laramap.com">Laramap.com</a>.</p>

    <div class="row">
        <div class="col-md-7">
            <p class="alert alert-warning">
                <strong>
                    <i class="fa fa-warning"></i> Cette application a été développée par 
                    <a target="_blank" href="http://twitter.com/aka_fawase">Aka Fawase Damilola</a> à des fins d'apprentissage.
                </strong>
            </p>
        </div>
    </div>

    <p>N'hésitez pas à nous aider à améliorer le <a target="_blank" href="https://github.com/mercuryseries/laracarte">code source</a>.</p>

    <hr>

    <h2>Qu'est-ce que Laramap?</h2>
    <p>Laramap est le site par lequel {{ config('app.name') }} a été inspiré :).</p>
    <p>Pour plus d'infos, <a target="_blank" href="https://laramap.com/p/about">cliquez ici</a>.</p>

    <hr>

    <h2>Quels outils et services sont utilisés dans {{ config('app.name') }}?</h2>
    <p>Fondamentalement, {{ config('app.name') }} a été développé avec les frameworks Laravel &amp; Bootstrap. 
            Mais il y a un tas de services utilisés pour le courrier électronique et d'autres sections.</p>
    <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Antony Martin's Geolocation Package</li>
        <li>Michel Fortin's Markdown Parser Package</li>
        <li>Heroku</li>
    </ul>
</div>

@stop