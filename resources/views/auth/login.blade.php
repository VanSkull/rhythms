@extends('layouts.template')

@section('content')
            <div id="connexion-section">
                
                <h2 id="connexion-section-title">{{ __('Connexion') }}</h2>

                <div id="connexion-section-contenu">
                    <form id="formulaire-connexion" method="POST" action="{{ route('login') }}">
                        @csrf

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Adresse e-mail') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Mot de passe') }}">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                            <div id="remember-champ" class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>

                            <input type="submit" id="connexion-button" class="btn btn-primary" value="{{ __('Se connecter') }}" />
                    </form>
                </div>
            </div>
@endsection
