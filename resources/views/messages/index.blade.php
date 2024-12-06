@extends('layouts.app1')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3g5c5c5c5c5c5c5c5c5c5c5c5c5c5c5c5c5c5c5c5c5" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jLjjXkkQ2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="accueil.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
       
        <title>Document</title>
    </head>
    <style>
        .container{
            justify-content: center
        }
       .chat-list {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
}
.chat-item {
    background-color: white; 
    border-radius: 8px; 
    box-shadow: 0 6px 8px rgba(13, 12, 12, 0.1); 
    margin-bottom: 30px;
    display: flex;
    align-items: center;
}
.chat-item:hover {
    background-color: lightblue;
}
.chat-item img {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-right: 15px;
}
.chat-details {
    flex-grow: 1; 
    display: flex; 
    flex-direction: column;
}
.chat-name {
    font-weight: bold;
    color: black;
}
.chat-message {
    color: rgb(41, 35, 35);
}
.chat-time {
    font-size: 0.9em;
    color: #aaa;
}
#text{
    padding-right: 50px;
}
.chat-badge {
    width: 15px; 
    height: 15px; 
    border-radius: 50%; 
    background-color: blue; 
    color: white; 
    display: flex; 
    align-items: center; 
    justify-content: center;
}

.num {
    width: 5px;
} 
    </style>
<body>
    <div class="container">
        <div class="row">
        
          <div class="col-md-12 mt-5">
            <div class="col-md-12 text-primary fw-bold">
                <p class="h1">Messages</p>
            </div>
        
            <div class="chat-list">
                <div
                <div class="chat-item pb-3">
                 <img height="50"   src="image/photoprofil.jpg" alt="photo de profil" />
                 <div class="chat-details">
                  <div class="chat-name">
                   Joel
                   <span class="badge bg-primary rounded-circle align-middle d-inline-flex align-items-center justify-content-center" 
                   style="width: 1rem; height: 1rem; font-size: 0.6rem; padding: 0;">9</span>
                  </div>
                  
                  
                  <div class="chat-message"  onclick="location.href='/conversation'">
                   Samuel
                  </div>
                 </div>
                 <div class="text-end">
                  <div class="chat-time px-3">
                   11:28 AM
                  </div>
                 </div>
                </div>
            
            
                <div class="chat-item pb-3">
                    <img height="50"   src="image/photoprofil.jpg" alt="photo de profil" />
                    <div class="chat-details">
                        <div class="chat-name">
                            Johnson
                            <span class="badge bg-primary rounded-circle align-middle d-inline-flex align-items-center justify-content-center" 
                                  style="width: 1rem; height: 1rem; font-size: 0.6rem; padding: 0;">
                              9
                            </span>
                          </div>                                             
                     <div class="chat-message" onclick="location.href='/conversation'">
                      Yo man
                     </div>
                    </div>
                    <div class="text-end">
                     <div class="chat-time px-3">
                      11:28 AM
                     </div>
                    </div>
                   </div>
            
            
                <div class="chat-item pb-3">
                 <img  height="50"  src="image/photoprofil.jpg" alt="photo de profil" />
                 <div class="chat-details">
                  <div class="chat-name">
                  David
                  </div>
                  <div class="chat-message" onclick="location.href='/conversation'">
                    Yes yes
                  </div>
                 </div>
                 <div class="text-end">
                  <div class="chat-time px-3">
                   8:58 AM
                  </div>
                 </div>
                </div>
            
            
                <div class="chat-item pb-3">
                 <img height="50"   src="image/photoprofil.jpg" alt="photo de profil" />
                 <div class="chat-details">
                  <div class="chat-name">
                   Leslie
                  </div>
                  <div class="chat-message" onclick="location.href='/conversation'">
                   Hi
                  </div>
                 </div>
                 <div class="text-end">
                  <div class="chat-time px-3">
                   8:51 AM
                  </div>
                 </div>
                </div>
            
            
                <div class="chat-item pb-3">
                 <img  height="50"  src="image/photoprofil.jpg" alt="photo de profil" />
                 <div class="chat-details">
                  <div class="chat-name">
                  Flaura
                  </div>
                  <div class="chat-message" onclick="location.href='/conversation'">
                 Yo
                  </div>
                 </div>
                 <div class="text-end">
                  <div class="chat-time px-3">
                   8:11 AM
                  </div>
                 </div>
                </div>
                </a>
                <a href="/conversation">
                <div class="chat-item pb-3">
                 <img  height="50"   src="image/photoprofil.jpg" alt="photo de profil" width="50"/>
                 <div class="chat-details">
                  <div class="chat-name">
                   Elvira
                  </div>
                  <div class="chat-message" onclick="location.href='/conversation'">
                  Yes yes
                  </div>
                 </div>
                 <div class="text-end">
                  <div class="chat-time px-3">
                   8:09 AM
                  </div>
                 </div>
                </div>
                </a>
          </div>
        </div>
    </div>
</body>
</html>
@endsection
