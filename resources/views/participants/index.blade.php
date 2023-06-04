@extends('layout')

@section('content')
    <h1>Liste des participants</h1> <br>

    <a href="{{ route('participants.create') }}" class="btn btn-primary">Ajouter un participant</a>
    <br>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $participant)
                <tr>
                    <td>{{ $participant->nom }}</td>
                    <td>{{ $participant->prenom }}</td>
                    <td>{{ $participant->telephone }}</td>
                    <td>{{ $participant->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
