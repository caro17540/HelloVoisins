@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Vos voisins</h2>
	<form class="form-horizontal" method="GET" action="{{ route('users_filter') }}">
        <div class="form-group row mb-5">
            <label for="skillTitle" class="col-md-2 col-form-label">{{ __('Compétence') }}</label>
			<select name="skillTitle" id="skillTitle" >
				@foreach($skills as $skill)
					<option value="{{ $skill->title }}" 
						@if ($skill->title == old('skillTitle', $model->option))
							selected="selected"
						@endif
						>{{ $skill->title }}
					</option>
				@endforeach
			</select>
            <div class="col-md-2">
				<button type="submit" class="btn btn-primary">
                    {{ __('Filtrer') }}
                </button>
            </div>
		</div>
	</form>

	<div class="table-responsive mb-3">
        <table class="table table-striped ml-5">
            <thead>
                <th>Nom</th>
                <th>Prénom</th>
				<th>Adresse</th>
				<th>Inscrit depuis le</th>
				<th>Compétence</th>
				<th>Description</th>
            </thead>
            @foreach($users as $user)
                <tr>
                    <td><a href="/user/{{{ $user->id }}}">{{{ $user->lastname }}}</a></td>
                    <td>{{{ $user->firstname }}}</td>
					<td>{{ $user->street }} {{ $user->zipcode }} {{ $user->city }}</td>
					<td>{{{ $user->created_at }}}</td>
					<td>{{{ $user->skill }}}</td>
					<td>{{{ $user->description }}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection