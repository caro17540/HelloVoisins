@extends('layouts.app')

@section('content')
<div class="container usershow">
    <h2 class="userinfo">Fiche de votre Voisin  <span class="hilite">{{ $users[0]->login }}</span></h1>
    <h3 class="text-left">Son profil</h3>
    @if (filled($users[0]->description))
        <p>{{ $users[0]->description }}</p>
    @else
        <p>Votre voisin n'a pas encore renseigné son profil !</p>
    @endif    
    <h3 class="text-left">Ses compétences</h3>
    @foreach($users as $user)
        <p>{{ $user->skills[0]->title }}</p>
    @endforeach

    <button>Demande de transaction</button>
</div>

@endsection