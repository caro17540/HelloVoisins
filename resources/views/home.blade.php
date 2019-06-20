@extends('layouts.app')

@section('content')
<div class="presentation">
    <h2 class="slogan">Hello Voisins, c'est se rendre des petits services au quotidien ;-)<h2>
    <blockquote class="citation">"Il se faut s’entraider, c’est la loi de nature."<span class="citation">Jean de La Fontaine</span></blockquote>
</div>

<div class="container">
    <div class="row">
        <div class="resume col-md-6">
            <p>Un site d'échange et de partage de <span class="surligne">services contre services</span> entre voisins.
            <br>Échanger son savoir faire, troquer, quelle bonne idée... 
            <br>Du bricolage contre un cours de cuisine ou de guitare, c'est parfait pour la culture et aussi pour le porte monnaie! 
            <br>Pas d'argent, ni de temps, juste aider son prochain! (son voisin...;-)</p>
            <br>
            <p>Aujourd'hui, <span class="surligne">il y a {{ $user_count }} voisins</span> inscrits dans toute la France.
            <br>Si tu veux savoir combien habitent tout près de chez toi, rejoins-nous !</p>
            
            <button class="btn-primary"><a class="inscris" href="/register">Inscris-toi ;-)</a></button>
            
            <p class="dejainscrit">Déjà inscrit ? <a class="connect" href="/login">Connecte-toi ;-)</a></p>
        </div>
        <div class=" col-md-2 border1">
            <p class="skills"><img src="images/jardinage.png" alt="jardinage">Jardinage</p>
            <p class="skills"><img src="images/maconnerie.png" alt="maconnerie">Maçonnerie</p>
            <p class="skills"><img src="images/peinture.png" alt="peinture">Peinture</p>
            <p class="skills"><img src="images/plomberie.png" alt="plomberie">Plomberie</p>
            <p class="skills"><img src="images/electricite.png" alt="electricite">Eléctricité</p>
            <p class="skills"><img src="images/travauxmanuels.png" alt="manuels">Travaux manuels</p>
            <p class="skills"><img src="images/bricolage.png" alt="bricolage">Bricolage</p>
            <p class="skills"><img src="images/reparation.png" alt="reparation">Réparation</p>
            <p class="skills"><img src="images/montagemeubles.png" alt="meubles">Montage de meubles</p>
            <p class="skills"><img src="images/demenagement.png" alt="demenagement">Déménagement</p>
        </div>
        <div class="col-md-2">
            <p class="skills"><img src="images/gardeenfants.png" alt="enfants">Garde d'enfants</p>
            <p class="skills"><img src="images/musique.png" alt="musique">Cours de musique</p>
            <p class="skills"><img src="images/langues.png" alt="langues">Cours de langues</p>
            <p class="skills"><img src="images/toilettage.png" alt="toilettage">Toilettage</p>
            <p class="skills"><img src="images/gardeanimaux.png" alt="gardeanimaux">Garde d'animaux</p>
            <p class="skills"><img src="images/menage.png" alt="menage">Ménage</p>
            <p class="skills"><img src="images/cuisine.png" alt="cuisine">Cuisine</p>
            <p class="skills"><img src="images/repassage.png" alt="repassage">Repassage</p>
            <p class="skills"><img src="images/entretienauto.png" alt="entretien">Entretien automobile</p>
            <p class="skills"><img src="images/reparationauto.png" alt="reparationauto">Réparation automobile</p>
        </div>        
        <div class="col-md-2 border2">
            <p class="skills"><img src="images/soins.png" alt="soins">Soins esthétiques</p>
            <p class="skills"><img src="images/coiffure.png" alt="coiffure">Coiffure</p>
            <p class="skills"><img src="images/scolaire.png" alt="scolaire">Soutien scolaire</p>
            <p class="skills"><img src="images/courses.png" alt="courses">Courses</p>
            <p class="skills"><img src="images/visitecourtoisie.png" alt="visite">Visite de courtoisie</p>
            <p class="skills"><img src="images/maison.png" alt="maison">Garde de maison</p>
            <p class="skills"><img src="images/informatique.png" alt="informatique">Soutien informatique</p>
            <p class="skills"><img src="images/redactiondocs.png" alt="documents">Rédaction de documents</p>
            <p class="skills"><img src="images/demarchesadministratives.png" alt="administratifs">Démarches administratives</p>
            <p class="skills"><img src="images/fete.png" alt="fete">Organisation de fêtes</p>
        </div>
    </div>
</div>

    
        <div class="connexion col-md-6">
            
        </div>
    </div>
</div>



@endsection
