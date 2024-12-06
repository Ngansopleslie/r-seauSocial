@extends('layouts.app1')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Publications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
	<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .post {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
            padding: 20px;
            transition: transform 0.3s;
        }
        .post:hover {
            transform: scale(1.02);
        }
        .post-header, .post-footer {
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
			height: 100%;
        }
        .post-profile {
            display: flex;
            align-items: center;
        }
        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .post-content {
            margin-top: 15px;
        }
        .post-image {
            width: 100%;
            border-radius: 12px;
            margin-top: 15px;
        }
        .btn-like, .btn-comment, .btn-share {
            color: #606770;
            font-size: 16px;
            cursor: pointer;
            padding: 6px 10px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-like:hover, .btn-comment:hover, .btn-share:hover {
            color: #fff;
            background-color: #1877F2;
        }
        .text-limited {
            display: inline;
        }
    </style>
</head>
<body style="background-color: #f0f2f5;">

<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="post">
                <div class="post-header row">
                    <div class="post-profile col-10 d-flex align-items-center">
                        <img src="image/photoprofile" alt="Profile Picture" class="profile-pic">
                        <div>
                            <strong>Netflix France</strong> <span style="color: #9a9a9a;">• il y a 5 jours</span>
                            <p>Outer Banks ❤️ au top cette série</p>
                        </div>
                    </div>
                    <div class="col-2 text-end">
                        <span class="btn-option">⋮</span>
                    </div>
                </div>

                <div class="post-content">
                    <!-- Texte avec limitation -->
                    <p id="post-text">
                        <span class="text-limited">Outer Banks est une série captivante remplie d'aventures et de mystères... </span>
                        <span id="more-text" style="display: none;">
                            Elle suit un groupe d'adolescents à la recherche d'un trésor perdu, et les rebondissements vous tiendront en haleine jusqu'à la fin.
                        </span>
                        <a href="#" id="read-more" onclick="toggleText(event)">Lire plus</a>
                    </p>
                    
                    <img src="https://via.placeholder.com/500x300" alt="pas de connection internet" class="post-image ">
                </div>
                
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="row w-100">
                                <div class="col-12 col-lg-4 mb-2">
                                    <div class="d-flex align-items-center ml-2" style="font-size: 1.25rem;">
                                        <a href="#" class="btn btn-primary btn-circle btn-sm me-1">
                                            <i class="fas fa-hand-point-right"></i>
                                        </a>
                                        <small class="btn btn-success btn-circle btn-sm me-1">
                                            <i class="fas fa-hand-paper"></i>
                                        </small>
                                        <a href="#" class="btn btn-danger btn-circle btn-sm me-1">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <small class="text-gray" style="font-size: 0.75rem;">50</small>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 mb-2 text-center text-lg-start">
                                    <small class="text-gray">452 Commentaires</small>
                                </div>
                                <div class="col-12 col-lg-4 mb-2 text-center text-lg-start">
                                    <small class="text-gray">123 Répubications</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @media (max-width: 576px) {
                        .btn-circle {
                            width: 30px;
                            height: 30px;
                            border-radius: 50%;
                        }
                    }
                </style>

                <div class="border-top my-3"></div>
                <div class="row pt-3 bg-gray pb-4">
                    <div class="col-4 text-center">
                        <span>
                            <i class="fas fa-hand-point-left"></i>
                            <small class="text-gray">J'aime</small>
                        </span>
                    </div>
                    <div class="col-4 text-center">
                        <span>
                            <i class="fas fa-comment-dots"></i>
                            <small class="text-gray">Commenter</small>
                        </span>
                    </div>
                    <div class="col-4 text-center">
                        <span>
                            <i class="fas fa-paper-plane"></i>
                            <small>Partager</small>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleText(event) {
        event.preventDefault();
        var moreText = document.getElementById("more-text");
        var readMoreLink = document.getElementById("read-more");

        if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            readMoreLink.textContent = "Lire moins";
        } else {
            moreText.style.display = "none";
            readMoreLink.textContent = "Lire plus";
        }
    }
</script>
</body>
</html>

@endsection