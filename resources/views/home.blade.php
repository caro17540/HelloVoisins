@extends('layouts.app')

@section('content')
<div class="presentation">
    <h2 class="slogan">Hello Voisins, c'est se rendre des petits services au quotidien ;-)<h2>
    <blockquote class="citation">"Il se faut s’entraider, c’est la loi de nature."<span class="citation">Jean de La Fontaine</span></blockquote>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="resume col-md-6">
            <p>Un site d'échange et de partage de services contre services entre voisins.
            <br>Échanger son savoir faire, troquer, quelle bonne idée... du bricolage contre un cours de cuisine ou de guitare, c'est parfait pour la culture et aussi pour le porte monnaie! 
            <br>Pas d'argent, ni de temps, juste aider son prochain! (son voisin...;-)</p>
        </div>
    
        <div class="connexion col-md-6">
            <p>Aujourd'hui, il y a {{ $user_count }} voisins inscrits dans toute la France.
            <br>Si tu veux savoir combien habitent tout près de chez toi, rejoins-nous !</p>
            
            <button class="btn-primary"><a class="inscris" href="/register">Inscris-toi ;-)</a></button>
            
            <p class="dejainscrit">Déjà inscrit ? <a class="connect" href="/login">Connecte-toi ;-)</a></p>
        </div>
    </div>
</div>

@endsection
