<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./bootstrap/main.css">
<link rel="stylesheet" href="./bootstrap/css/bootstrap-icons/font/bootstrap-icons.min.css">
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="menu-icon">☰</div>
        <div class="collapse navbar-collapse">
            <form class="form-inline mx-auto">
                <input class="form-control search-bar" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="account d-flex align-items-center">
            <div class="avatar-icon"><i class="bi bi-person"></i></div>
            <span class="ml-2">Cuenta</span>
        </div>
    </nav>

    <div class="carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Imagenes/banner transition/BANNER PCS GAMER HIGH-.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Imagenes/banner transition/LAPTOPS HOME OFFICE.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Imagenes/banner transition/21.webp" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>


<div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <h5>Categorias</h5>
                <ul class="list-group mb-3">
                <li class="list-group-item">
                    <a href="#">Laptops</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Computadoras</a>
                </li>
                <li class="list-group-item">
                <a href="#">Accesorios</a>
                </li>
                <li class="list-group-item">
                  <a href="">Impresoras</a>
                </li>
                <li class="list-group-item">
                  <a href="">Servicio Tecnico</a>
                </li>
            </ul>

            <h6>Filtros</h6>

            <h6>Marca</h6>
            <ul class="list-group">
                <li class="list-group-item">
                    <input type="checkbox" id="hp">
                    <label for="hp">HP</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="dell">
                    <label for="dell">Dell</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="lenovo">
                    <label for="lenovo">Lenovo</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="apple">
                    <label for="apple">Apple</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="asus">
                    <label for="asus">Asus</label>
                </li>
            </ul>

            <h6>Procesador</h6>
            <ul class="list-group">
                <li class="list-group-item">
                    <input type="checkbox" id="intel-i5">
                    <label for="intel-i5">Intel i5</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="intel-i7">
                    <label for="intel-i7">Intel i7</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="amd-ryzen5">
                    <label for="amd-ryzen5">AMD Ryzen 5</label>
                </li>
                <li class="list-group-item">
                    <input type="checkbox" id="amd-ryzen7">
                    <label for="amd-ryzen7">AMD Ryzen 7</label>
                </li>
            </ul>
            </div>
        </div>
    </div>
  
    <div class="container mt-2">
        <h1 class="text-center">Laptops</h1>
        <div class="row">
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="resource/img/card1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Agregar al carrito</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="resource/img/card1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary align-items-center">Agregar al carrito</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="resource/img/card1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary">Agregar al carrito</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="resource/img/card1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary">Agregar al carrito</button>
    </div>
  </div>
 </div> 
<div class="container mt-4">
    <p class="text-center"> Categorias</p>
    <h3 class="text-center">Explore nuestra gama de Productos</h3>
    <div class="row mt-4">
        <div class="col-sm-12 col-md-3">
            <div class="card-body">
                <img class="mt-4 zoom-out" src="Imagenes/imagen 1.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card-body">
                <img class="mt-4 zoom-out" src="Imagenes/imagen 2.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card-body zoom-out">
                <img class="mt-4" src="Imagenes/imagen 3.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card-body zoom-out">
                <img class="mt-4" src="Imagenes/imagen 4.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12 col-md-3">
            <div class="card-body zoom-out">
                <img class="mt-4" src="Imagenes/imagen 5.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card-body zoom-out">
                <img class="mt-4" src="Imagenes/imagen 6.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card-body zoom-out">
                <img class="mt-4" src="Imagenes/imagen 7.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="card-body zoom-out">
                <img class="mt-4" src="Imagenes/imagen 8.png" alt="" style="width: 140%; height: auto;">
            </div>
        </div>
    </div>
</div>




    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</div>
</body> 
</html>