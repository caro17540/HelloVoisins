@extends('layouts.app')

@section('content')
<h2>Les Compétences</h2>
    <table class="table">
        <thead>
            <th>Intitulé</th>
            <th>Date de création</th>
            <th>Date de mise à jour</th>
        </thead>
        @foreach($skills as $skill)
            <tr>
                <td><a href="/skill/{{{ $skill->id }}}">{{{ $skill->title }}}</a></td>
                <td><a href="/skill/{{{ $skill->id }}}">{{{ $skill->created_at }}}</a></td>
                <td><a href="/skill/{{{ $skill->id }}}">{{{ $skill->updated_at }}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
