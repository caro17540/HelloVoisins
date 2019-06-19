@extends('layouts.app')

@section('content')
<h1>Utilisateurs</h1>
<table>

	<thead>
		
		
		<tr>
			<th>NOM</th>
		
			<th>COMPETENCES</th>
		
		</tr>
	
	
	</thead>
	<tbody>
	
		<tr>
		
			
			<td> {{ $user }}</td>
			<td><span><a href="#">skill1</span></a>  <span><a href="#">skill2</span></a> </td>
		
		
		</tr>
		
	
	
	
	</tbody>


</table> 
    

@endsection