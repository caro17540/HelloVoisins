@extends('layouts.app')

@section('content')
<div class="presentation">
    <h2 class="slogan">Hello Voisins, c'est se rendre des petits services au quotidien ;-)<h2>
    <blockquote class="citation">"Il se faut s’entraider, c’est la loi de nature."<span class="citation">Jean de La Fontaine</span></blockquote>
</div>

<div class="container-fluid competences">
    <div class="row">
        <div class=" col-md-12 icones">
            <ul class="contenu">
                <li class="skills">
                    <figure>    
                        <img src="images/jardinage.png" alt="jardinage">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/maconnerie.png" alt="maconnerie">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/peinture.png" alt="peinture">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/plomberie.png" alt="plomberie">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/electricite.png" alt="electricite">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/bricolage.png" alt="bricolage">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/reparation.png" alt="reparation">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/demenagement.png" alt="demenagement">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/gardeenfants.png" alt="enfants">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/musique.png" alt="musique">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/langues.png" alt="langues">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/toilettage.png" alt="toilettage">
                    </figure>
                </li>
            </ul>
        </div>
    </div>   
    <div class="row">
        <div class=" col-md-12 icones">
            <ul class="contenu">
                <li class="skills">
                    <figure>
                        <img src="images/gardeanimaux.png" alt="animaux">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/menage.png" alt="menage">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/cuisine.png" alt="cuisine">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/repassage.png" alt="repassage">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/entretienauto.png" alt="entretien">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/soins.png" alt="soins">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/coiffure.png" alt="coiffure">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/scolaire.png" alt="scolaire">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/courses.png" alt="courses">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/visitecourtoisie.png" alt="visite">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/maison.png" alt="maison">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/informatique.png" alt="informatique">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/redactiondocs.png" alt="redaction">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/demarchesadministratives.png" alt="administratifs">
                    </figure>
                </li>
                <li class="skills">
                    <figure>
                        <img src="images/fete.png" alt="fete">
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="presentation">
    <h3>Un site d'échange et de partage de <span class="surligne">services contre services</span> entre voisins.</h3>
</div>

<div class="container">
    <div class="row">
        <div class="resume col-md-6">
            <p>Aujourd'hui, <span class="surligne">il y a {{ $user_count }} voisins</span> inscrits dans toute la France.
            <br>Si tu veux savoir combien habitent tout près de chez toi, rejoins-nous !</p>
            <button class="btn-primary"><a class="inscris" href="/register">Inscris-toi ;-)</a></button>
            <p class="dejainscrit">Déjà inscrit ? <a class="connect" href="/login">Connecte-toi ;-)</a></p>
        </div>
        <div class="resume col-md-6">
            <p>Échanger son savoir faire, troquer, quelle bonne idée... 
            <br>Du bricolage contre un cours de cuisine ou de guitare, c'est parfait pour la culture et aussi pour le porte monnaie! 
            <br>Pas d'argent, ni de temps, juste aider son prochain! (son voisin...;-)</p>
        </div>
    </div>
</div>

@endsection
