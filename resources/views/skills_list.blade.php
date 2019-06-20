@extends('layouts.app')

@section('content')
<div class="container formulaire">
    <h2 class="skills">Les Compétences</h2>
    <div class="table-responsive mb-2">
        <table class="table table-striped">
            <thead>
                <th>Intitulé</th>
                <th>Date de création</th>
                <th>Date de mise à jour</th>
            </thead>
            @foreach($skills as $skill)
                <tr>
                    <td><a href="/skill/update/{{{ $skill->id }}}" class="skill">{{{ $skill->title }}}</a></td>
                    <td>{{{ $skill->created_at }}}</td>
                    <td>{{{ $skill->updated_at }}}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-4">
            <a href="{{ route('skill_create') }}">
                <button class="btn btn-primary">{{ __('Nouvelle Compétence') }}</button>
            </a>
        </div>
    </div>    
</div>
@endsection
