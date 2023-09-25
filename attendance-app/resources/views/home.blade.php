<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Home</title>
</head>
<body>
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
                <td>{{$student->matricule}}</td>
                <td>{{$student->nom}}</td>
                <td>{{$student->prenom}}</td>
                <td>{{$student->groupe}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>