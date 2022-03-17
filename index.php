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
                        <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate fondo-negro text-white"
                            data-bs-parent="#sidebar"><i class="bi bi-bootstrap"></i> <span>Películas</span> </a>
                        <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate fondo-negro text-white"
                            data-bs-parent="#sidebar"><i class="bi bi-film"></i> <span>Item</span></a>
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
                <section  style="margin-top: 20px; padding-left:15px">
                    <!-- contenido -->
                    <?php include_once __DIR__.'/src/principal.php'?>
                </section>
            </main>
        </div>
    </div>




<?php include_once __DIR__.'/template/footer.php'; ?>