@extends('layouts.app')

@section('content')
<div class="container formskilledit">
    <h2 class="mb-5 titreskilledit">Création d'une nouvelle Transaction</h2>
    
    <form method="PUT" action="{{ route('transaction_update', $trans->id ) }}">
        @csrf

        <div class="form-group row mb-5">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Vous') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $skill->title }}" required>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group skilledit row">
            <div class="col-md-2 col-sm-2">
                <a href="{{ route('skills') }}">
                    <input type="button" value="Annuler" class="btn btn-secondary">
                </a>
            </div>
            <div class="col-md-2 col-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Mettre à jour') }}
                </button>
            </div>
        </div>

    </form>
</div>
@endsection