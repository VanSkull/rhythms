@extends('layouts.template')

@section('content')
            <div id="inscription-section">
                
                <h2 id="inscription-section-title">{{ __('Inscription') }}</h2>

                <div id="inscription-section-contenu">
                    <form id="formulaire-inscription" method="POST" action="{{ route('register') }}">
                        @csrf
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Nom') }}">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Adresse e-mail') }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}">
                        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirmation mot de passe') }}">
                        
                            <input type="submit" id="inscription-button" class="btn btn-primary" value="{{ __('S\'inscrire') }}" />
                    </form>
                </div>
            </div>
@endsection
