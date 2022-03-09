<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Veículos</title>
    <link href='<?php base_url() ?>/css/style.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71d37f4069.js" crossorigin="anonymous"></script>
    <style>
        .modal-fullscreen{
            width: 25vw;
            float: right;
        }
    </style>
</head>
<body class='bg-light'>
    <div class="row bg-white border-bottom border-danger border-3" id='header'>
        <div class="col-5 offset-1">
            <h3>Loja de Veículos</h3>
        </div>
        <div class="col-1 offset-4 text-danger">
            <button  type="button" class="btn border-danger border-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Menu</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
        <div class="modal-header border-bottom border-danger border-3">
            <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <a class='nav' href="home">Home</a>
            <a class='nav' href="sobre">Quem Somos</a>
            <a class='nav' href="contato">Contato</a>
        </div>
        </div>
    </div>
    </div>
    
    <div class="row" id='corpo'>
        <div class="col-8 offset-2 bg-white">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/Forza-6-Apex-No-CrossPlay.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://www.gameinformer.com/s3/files/styles/body_default/s3/legacy-images/imagefeed/Through%20The%20Darkness%20%26%20The%20Rain%20With%20Forza%206/Forza66.15prev610.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://d3c2fk1rpoooj4.cloudfront.net/wp-content/uploads/2016/02/2916259-forza-motorsport-6-alfa-romeo-jpg-711x400.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>