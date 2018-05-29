@extends('layouts/master_layout', ['title' => 'Artisans'])

@section('content')
    
<div class="container">

    <h1 class="text-center">Liste des {{ count($users) }} artisans du monde entier</h1>

    <br>

    @foreach ($users->chunk(12) as $group)
        <div class="row">
            @foreach($group as $user)
                <div class="col-md-1 col-sm-3 col-xs-4 text-center spaced">
                    <a href="{{ route('profile_path', $user->username)}}">
                        <img src="{{ Gravatar::src($user->email, 70) }}" class="img-rounded" alt="{{ $user->name }}">
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

@stop