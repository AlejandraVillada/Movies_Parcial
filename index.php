<?php include_once __DIR__.'/template/header.php'; ?>


<div class="container-fluid mt-0">
    <div class="row flex-nowrap">
        <div class="col-auto px-0 p-0 m-0">
            <div id="sidebar" class="collapse collapse-horizontal show">
                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100 fondo-negro">
                    <div class="text-center" style="height: 74px; color:white; ">
                        <h1 class="mt-2">

                            Movies JM

                        </h1>
                    </div>
                    <div class="row p-3">
                        <a href="src/principal.php"
                            class="lista1 list-group-item border-end-0 d-inline-block text-truncate fondo-negro text-white"
                            data-bs-parent="#sidebar"><i class="bi bi-bootstrap"></i> <i class="fa-solid fa-film"></i> <span>Películas</span>  </a>
                        <a href="src/informacion.php"
                            class="lista1 list-group-item border-end-0 d-inline-block text-truncate fondo-negro text-white"
                            data-bs-parent="#sidebar"><i class="bi bi-film"></i><i class="fa-solid fa-film"></i> <span>Series</span></a>
                    </div>

                </div>
            </div>
        </div>
        <main class="col ps-md-2 pt-0">
            <div class="row">
                <nav class="navbar navbar-dark fondo-negro ">
                    <nav class="navbar navbar-dark fondo-negro">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col">
                                    <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
                                        class="border rounded-3 text-decoration-none p-0 justify-content-center d-flex">
                                        <i class="fa-solid fa-bars p-2 m-1 text-white"></i>
                                    </a>

                                </div>
                                <div class="col">
                                    <a class="navbar-brand m-2 " href="#">
                                        <i class="fa-solid fa-compact-disc"></i>
                                        Movies JM
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </nav>

            </div>
            <section class="principal"
                style="padding-top: 20px; padding-left:15px;overflow-y: scroll; max-height:600px;">
                <!-- contenido -->


                <?php include ('src/principal.php');?>

            </section>
            <section>
                <div class="container justify-content-center ">
                    <a class="navbar-brand m-2 " href="#">
                        <i class="fa-solid fa-compact-disc"></i>
                        Movies JM
                    </a>
                    <div style="float: right;" class="text-white">
                        
Siguenos en   
                    <a class="m-1" href=""><i class="fa-brands fa-instagram fa-2x"></i></a>
                    
                    <a class="m-1"href=""><i class="fa-brands fa-facebook fa-2x"></i></a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>




<?php include_once __DIR__.'/template/footer.php'; ?>
<script src="public/js/inicio.js"></script>