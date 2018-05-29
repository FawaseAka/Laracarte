@extends('layouts/master_layout', ['title' => 'Compte'])

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>{{ $user->name }}</h2>
            <h4>
                <i class="fa fa-clock-o"></i>
                Membre depuis le {{ $user->created_at->formatLocalized('%A %d %B %Y') }}
            </h4>
        </div>
        <div class="col-md-6 text-right">
            <ul class="list-inline">
                @if($user->github)
                    <li><a target="_blank" href="{{ $user->github }}"><i class="fa fa-github"></i> GitHub</a></li>
                @endif
    
                @if($user->website)
                    <li><a target="_blank" href="{{ $user->website }}"><i class="fa fa-globe"></i> Website / Blog</a></li>
                   @endif
    
                @if($user->twitter)
                  <li><a target="_blank" href="{{ $user->twitter }}"><i class="fa fa-twitter"></i> Twitter</a></li>
                @endif
            </ul>
    
            @if($user->available_for_hire)
              <ul class="list-inline">
                  <li><i class="fa fa-briefcase"></i> Je suis disponible pour emploi !</li>
              </ul>
            @endif
       </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-3">
            <img src="{{ Gravatar::src($user->email, 260) }}" alt="{{ $user->name }}" class="img-rounded">
        </div>
        <div class="col-md-4">
            <h3>Compétences</h3>
            <br>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $user->laravel }}" aria-valuemin="0" 
                    aria-valuemax="100" style="width: {{ $user->laravel }}%;">
                    Laravel
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $user->frontend }}" aria-valuemin="0" 
                    aria-valuemax="100" style="width: {{ $user->frontend }}%;">
                    Frontend
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $user->backend }}" aria-valuemin="0" 
                    aria-valuemax="100" style="width: {{ $user->backend }}%;">
                    Backend
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $user->mobile }}" aria-valuemin="0" 
                    aria-valuemax="100" style="width: {{ $user->mobile }}%;">
                    Mobile
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h3>Biographie</h3>
            <br>
            <p>
                @if($user->bio)
                    {{ nl2br($user->bio) }}
                @else
                    Aucune biographie pour le moment...
                @endif
            </p>
       </div>
    </div>
</div>

@stop