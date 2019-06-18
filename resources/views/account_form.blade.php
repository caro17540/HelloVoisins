@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <fieldset>
        <legend>Informations Générales</legend>

        <div class="form-group row">
            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

            <div class="col-md-6">
                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ Auth::user()->firstname }}" required autocomplete="firstname" autofocus>

                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

            <div class="col-md-6">
                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ Auth::user()->lastname }}" required autocomplete="lastname" autofocus>

                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

            <div class="col-md-6">
                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ Auth::user()->description }}" autocomplete="description"></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </fieldset>

    <fieldset>
        <legend>Informations de Connexion</legend>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Courriel') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de Passe') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation du Mot de Passe') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

    </fieldset>

    <div class="form-group row mb-0">
        <div class="col-md-4">
            <a href="{{ route('account_delete') }}">
                <button class="btn btn-secondary">
                    {{ __('Suppression du Compte') }}
                </button>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('account') }}">
                <button class="btn btn-secondary">
                    {{ __('Annuler') }}
                </button>
            </a>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Valider') }}
            </button>
        </div>
    </div>

</form>
@endsection