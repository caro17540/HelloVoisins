@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p>Aujourd'hui, il y a 10000 voisins inscrits dans toute la France.
            <br>Si tu veux savoir combien habitent tout près de chez toi, rejoins-nous !</p>
            
            <button><a href="/register">Inscris-toi !</a></button>
            <p>Déjà inscrit ? <a href="/login">Connecte-toi !</a></p>
        </div>
    </div>
</div>
@endsection
