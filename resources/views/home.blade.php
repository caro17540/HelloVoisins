@extends('layouts.app')

@section('content')
<div class="presentation">
    <h2 class="slogan">Hello Voisins, c'est se rendre des petits services au quotidien ;-)<h2>
    <blockquote class="citation">"Il se faut s’entraider, c’est la loi de nature."<span class="citation">Jean de La Fontaine</span></blockquote>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-1">
            <figure>
                <img src="images/jardinage.png" alt="jardinage">
                    <figcaption>Jardinage</figcaption>
            </figure>
        </div>
        <div class="col-md-1">
            <figure>
                <img src="images/maconnerie.png" alt="maconnerie">
                    <figcaption>Maçonnerie</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/peinture.png" alt="peinture">
                    <figcaption>Peinture</figcaption>
            </figure>
        </div>
        <div class="col-md-1">
            <figure>
                <img src="images/plomberie.png" alt="plomberie">
                    <figcaption>Plomberie</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/electricite.png" alt="electricite">
                    <figcaption>Eléctricité</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/bricolage.png" alt="bricolage">
                    <figcaption>Bricolage</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/travauxmanuels.png" alt="manuels">
                    <figcaption>Travaux manuels</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/reparation.png" alt="reparation">
                    <figcaption>Réparation</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/montagemeubles.png" alt="meubles">
                    <figcaption>Montage de meubles</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/demenagement.png" alt="demenagement">
                    <figcaption>Déménagement</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/gardeenfants.png" alt="enfants">
                    <figcaption>Garde d'enfants</figcaption>
            </figure>
        </div>
        <div class=" col-md-1">
            <figure>
                <img src="images/scolaire.png" alt="scolaire">
                    <figcaption>Soutien scolaire</figcaption>
            </figure>
        </div>
    </div>
    

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="resume col-md-6">
            <p>Un site d'échange et de partage de <span class="surligne">services contre services</span> entre voisins.
            <br>Échanger son savoir faire, troquer, quelle bonne idée... du bricolage contre un cours de cuisine ou de guitare, c'est parfait pour la culture et aussi pour le porte monnaie! 
            <br>Pas d'argent, ni de temps, juste aider son prochain! (son voisin...;-)</p>
        </div>
    
        <div class="connexion col-md-6">
            <p>Aujourd'hui, <span class="surligne">il y a {{ $user_count }} voisins</span> inscrits dans toute la France.
            <br>Si tu veux savoir combien habitent tout près de chez toi, rejoins-nous !</p>
            
            <button class="btn-primary"><a class="inscris" href="/register">Inscris-toi ;-)</a></button>
            
            <p class="dejainscrit">Déjà inscrit ? <a class="connect" href="/login">Connecte-toi ;-)</a></p>
        </div>
    </div>
</div>



@endsection
