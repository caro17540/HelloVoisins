@extends('layouts.app')

@section('content')
<div class="container usershow">
    <h2 class="userinfo">Fiche de votre Voisin  <span class="hilite">{{ $user->login }}</span></h1>
    
    <h3 class="text-left">Son profil</h3>

    @if (filled($user->description))
        <p>{{ $user->description }}</p>
    @else
        <p>Votre voisin n'a pas encore renseigné son profil !</p>
    @endif  

    <h3 class="text-left">Ses compétences</h3>

    <form class="form-horizontal" method="GET" action="{{ route('transaction_create', Auth::user()->id, $user->id) }}">
        <div class="form-group row mb-5">
            @for ($i=0; $i<$user->skills_count; $i++)
                <label for="skilltitle">{{{ $user->skills[$i]->title }}}</label>
                <input name="skilltitle" id="skilltitle" type="radio" value="{{{ $user->skills[$i]->id }}}"/> 
		    @endfor
            <div class="col-md-2">
				<a href="{{ route('users_list') }}">
                    <input type="button" value="Annuler" class="btn btn-secondary">
            	</a>
            </div>
            <div class="col-md-2">
				<button type="submit" class="btn btn-primary">
                    {{ __('Initier la transaction') }}
                </button>
			</div>
		</div>
	</form>
    

    
</div>

@endsection