@extends('layouts.app')

@section('content')
<h2>Mes Transactions</h2>
    <table class="table">
        <thead>
            <th>Date de Création</th>
            <th>Statut</th>
            <th>Interlocuteur</th>
        </thead>
        @foreach($transactions as $transaction)
            <tr>
                <td><a href="/transaction/{{{ $transaction->id }}}">{{{ $transaction->created_at }}}</a></td>
                <td><a href="/transaction/{{{ $transaction->id }}}">{{{ $transaction->status }}}</a></td>
                <td><a href="/transaction/{{{ $transaction->id }}}">{{{ $transaction->user }}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
