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
    @yield('liste')

    {{-- <table id="content">

    </table> --}}

    @yield('formulaire')
</body>
</html>