<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <!-- NAV CONTAINER START -->
    <div class="container-fluid">
        <a href="" class="navbar-brand text-info fw-semibold fs-4">MiCondominio</a>

        <!-- NAV BUTTON  -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- OFFCANVAS MAIN CONTAINER START -->
        <section class="offcanvas offcanvas-start" id="menuLateral" tabindex="-1">
            <div class="offcanvas-header" data-bs-theme="dark">
                <h5 class="offcanvas-title text-info">MiCondominio</h5>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
            </div>
            <!-- OFF CANVAS MENU LINKS  START-->
            <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                <ul class="navbar-nav fs-5 justify-content-evenly">
                    <li class="nav-item p-3 py-md-1">
                        <a href="vistaresidente.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="" class="nav-link">Multas</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="pagogastocomun.php" class="nav-link">Pago Online</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="" class="nav-link">Reservas</a>
                        
                    </li>
                    

                </ul>
                <!-- enlaces redes sociales -->

                <div class="d-lg-none align-self-center py-3">
                    <a href=""><i class="bi bi-twitter px-2 text-info fs-2"></i></a>
                    <a href=""><i class="bi bi-facebook px-2 text-info fs-2"></i></a>
                    <a href=""><i class="bi bi-github px-2 text-info fs-2"></i></a>
                    
                </div>
            </div>
        </section>
        <!-- OFFCANVAS MAIN CONTAINER END  -->
    </div>
</nav>