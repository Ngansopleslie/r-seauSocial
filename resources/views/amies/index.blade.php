@extends('layouts.app1')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/dist/css/bootstrap.min.css">
    <script src="/assets/js/color-modes.js"></script>
    <link rel="stylesheet" href="style/accueil.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<style>
    .container
    {
        justify-content: center;
        
    }
    .bordures
    {
        border: solid .02px lightblue;
        border-radius: 1%;

    }
</style>
<body>
   <div class=" container mt-5 ">
        <div class="row mt-5 bordures mb-2">
            <div class="col-md-2">
                <div class="corps">
                    <img src="image/photoprofil.jpg" alt="photo de profil" />
                </div>
            </div>
            <div class="col-md-8 mr-3">
                
                    <Strong>ngansop leslie</Strong>
                
                
            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="row mt-2 mb-2">
                    <div class="col-md-6 mr-3">
                    <button class="btn btn-primary">Confirmer</button>
                    </div>
                    <div class="col-md-6 ml-3">
                    <button class="btn btn-secondary">Supprimer</button>   
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection