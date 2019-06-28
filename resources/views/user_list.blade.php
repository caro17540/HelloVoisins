@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="voisins">Vos voisins</h2>
	<form class="form-horizontal" method="GET" action="{{ route('users_list') }}">
        <div class="form-group row mb-5">
            <label for="skillTitle" class="col-md-2 col-form-label">{{ __('Compétence') }}</label>
			<select name="skillTitle" id="skillTitle" >
				<option value="">---</option>
				@foreach($skills as $skill)
					<option value="{{ $skill->title }}" >
						{{ $skill->title }}
					</option>
				@endforeach
			</select>
            <div class="col-md-2">
				<button type="submit" class="btn btn-primary">
                    {{ __('Filtrer') }}
                </button>
			</div>
			<div class="col-md-2">
				<a href="{{ route('users_list') }}">
                	<button class="btn btn-secondary">{{ __('Réinitialiser') }}</button>
            	</a>
            </div>
		</div>
	</form>

	<div class="table-responsive mb-3">
        <table class="table table-striped">
            <thead>
                <th>Pseudo</th>
				<th>Adresse</th>
				<th>Inscrit depuis le</th>
				<th>Compétence</th>
				<th>Description</th>
            </thead>
            @foreach($users as $user)
                <tr>
                    <td><a href="/user/{{{ $user->id }}}" class="user">{{{ $user->login }}}</a></td>
					<td>{{ $user->street }} {{ $user->zipcode }} {{ $user->city }}</td>
					<td>{{{ $user->created_at }}}</td>
					<td>{{{ $user->skills[0]->title }}}</td>
					<td>{{{ $user->description }}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection