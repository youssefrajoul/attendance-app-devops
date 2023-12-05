@extends('canevas')
{{-- @section('title', "Formulaire d'Insertion d'Étudiant") --}}
@section('liste')
<h1>Liste des étudiants</h1>
<table class="customTable">
    <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Groupe</th>
    </tr>
    @foreach ($datas as $student)
    <tr>
        <td>{{ $student->matricule }}</td>
        <td>{{ $student->nom }}</td>
        <td>{{ $student->prenom }}</td>
        <td>{{ $student->groupe }}</td>
        <td>
            <form action='/students/delete/{{$student->matricule}}' method='POST'>
                @csrf
                <input type='hidden' name='_method' value='delete'>
                <button type='submit'> supprimer </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

@section('formulaire')
<h2>Formulaire d'Insertion d'Étudiant</h2>
<form action="/student" method="post">

    @csrf

    <label for="matricule">Matricule Student :</label>
    <input type="text" name="matricule" id="matricule" required><br><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br><br>

    <label for="groupe">Groupe :</label>
    <input type="text" name="groupe" id="groupe" required><br><br>

    <input type="submit" value="Ajouter Étudiant">
</form>
@endsection