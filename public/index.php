<?php require_once("./includes/page-top.php");?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/hamburger-h500.png" class="d-block" alt="Imagem de Hambúrguer">
        </div>
        <div class="carousel-item">
            <img src="./img/hotdog-h500.png" class="d-block" alt="Imagem de Hot Dog">
        </div>
        <div class="carousel-item">
            <img src="./img/potato-h500.png" class="d-block" alt="Imagem de Batata Recheada">
        </div>
        <div class="carousel-item">
            <img src="./img/snacks-h500.png" class="d-block" alt="Imagem de Petiscos">
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
<main class="container p-3">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-white bg-warning h-100">
                <img class="card-img-top" src="./img/hamburger-cartoon-w358.png" alt="Card de Hambúrguer">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-white bg-warning h-100">
                <img class="card-img-top" src="./img/hotdog-cartoon-w358.png" alt="Card de Hot Dog">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-white bg-warning h-100">
                <img class="card-img-top" src="./img/snacks-cartoon-w358.png" alt="Card de Petiscos">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card text-white bg-warning h-100">
                <img class="card-img-top" src="./img/potato-cartoon-w358.png" alt="Card de Batata">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once("./includes/page-botton.php");?>