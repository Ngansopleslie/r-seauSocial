@extends('layouts.app1')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="list-groups.css" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="accueil.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
      .container {
        background-color: rgb(224, 233, 253);
      }
      .container {
        display: flex;
        flex-direction: row;
        justify-content:center ;
      }
      .title {
        position: sticky;
        top: 0;
        background-color: white;
        padding: 1rem;
        z-index: 1;
        border-radius: 5px 5px 0 0;
        border: .1px;
      }
      .title > h1 {
        color: blue;
        font-size: 40px;
        font-weight: bold;
      }
      .list-group-item-action {
        width: 450px;
      }
      .contains {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: 5px;
        width: 300px;
      }
      .optionbtn {
        color: black;
        align-items: center;
        display: flex;
        justify-content: center;
        height: 40px;
        width: 40px;
        padding-top: -100px;
      }
      .optionbtn:hover {
        background-color: rgb(212, 212, 212);
        border-radius: 100px;
        transition: ease 0.3s;
      }
      .vu {
        align-items: center;
        display: flex;
        justify-content: center;
        margin: 10px 0 10px 0;
        background-color: white;
        width: 450px;
        color: rgb(32, 121, 255);
        padding: 10px 0 10px 0;
      }
      .vu:hover {
        cursor: pointer;
        color: rgb(40, 63, 194);
      }
    </style>
  </head>
  <body>
    
       <div class="container mt-2">
      <div 
        class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center"
      >
      
        <div class="list-group">
          <div class="title">
            <h1>Notifications</h1>
          </div>
          <div class="vu">
            <h5>Tout marquer comme lu</h5>
          </div>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
             src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">
                    L'utilisateur a fait une publication sur un sujet tres
                    interessant
                  </h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">
                    L'utilisateur a réagit a votre publication
                  </h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>

              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">
                    Vous aimerez peut-être Solar energy for all
                  </h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">
                    Afrique actuelle a recement partagé 1 publication
                  </h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains" onclick="location.hrf('/amies')">
                  <h6 class="mb-0">
                    Vous avez de nouvelles suggestions d'ami(e)s
                  </h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">Balthazart vous a envoyé une invitation</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">L'utilisateur a fait une publication</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">L'utilisateur a fait une publication</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
              src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">L'utilisateur a fait une publication</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">L'utilisateur a fait une publication</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">L'utilisateur a fait une publication</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action d-flex gap-3 py-3"
            aria-current="true"
          >
            <img
            src="image/photoprofil.jpg" alt="photo de profil" 
              alt="twbs"
              width="50"
              height="50"
              class="rounded-circle flex-shrink-0"
            />
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <div class="contains">
                  <h6 class="mb-0">L'utilisateur a fait une publication</h6>
                  <!-- <p class="mb-0 opacity-75">a fait une publication</p> -->
                </div>
                <small class="opacity-50 text-nowrap">Il y a 2 min</small>
              </div>
              <h4 class="optionbtn">...</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection