@extends('layouts.app')

@section('content')
<div class="container formskillcreate">
    <h2 class="mb-5 titreskillcreate">Nouvelle Compétence</h2>

    <form class="form-horizontal" method="POST" action="{{ route('skill_insert') }}">
        @csrf

        <div class="form-group row mb-5">
            <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Intitulé') }}</label>

            <div class="col-md-10">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group skillcreate row">
            <div class="col-md-2 col-sm-2">
                <a href="{{ route('skills') }}">
                    <button class="btn btn-secondary">
                        {{ __('Annuler') }}
                    </button>
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Valider') }}
                </button>
            </div>
        </div>

    </form>
</div>
@endsection