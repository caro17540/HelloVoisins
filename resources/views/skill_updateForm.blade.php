@extends('layouts.app')

@section('content')

<form method="GET" action="{{ route('register') }}">
    @csrf

    <fieldset>
        <legend>Fiche de la Compétence</legend>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Intitulé') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $skill->title }}" required autocomplete="firstname" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        
    </fieldset>

    <div class="form-group row mb-0">
        <div class="col-md-4">
            <a href="{{ route('skill_delete') }}">
                <button class="btn btn-secondary">
                    {{ __('Suppression de la Compétence') }}
                </button>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('skills') }}">
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