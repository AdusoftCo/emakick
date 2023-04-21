<footer class="container-fluid mt-5">
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#022c4d;">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <div class="container-fluid">
                            <a class="navbar-brand p-4 d-flex " href="index2.php">
                            <img src="imagenes/ico8-confianza-94.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Jane Fernandez Daga
                            </a>
                        </div>
                        <!--<div class="p-3 d-flex ">
                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon
                                src="imagenes/269-avatar-female-outline-edited.json"
                                trigger="loop"
                                delay="1000"
                                colors="primary:#FFFFFF"
                                style="width:50px;height:50px;">
                                
                            </lord-icon>
                            <a class="nav-link active" aria-current="page"  href="index2.php">Jane Fernandez Daga</a>
                        </div>-->
                    </li>

                    <li class="nav-item">
                        <div class="container-fluid ">
                            <a class="navbar-brand p-4 d-flex" href="index_admin.php">
                            <img src="imagenes/server.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Volver a Categorías
                            </a>
                        </div>
                        <!--<div class="p-3 d-flex ">
                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon
                                src="imagenes/112-book-morph-outline-edited.json"
                                trigger="loop"
                                delay="1000"
                                colors="primary:#FFFFFF"
                                style="width:50px;height:50px;">
                                
                            </lord-icon>
                            <a class="nav-link active" aria-current="page"  href="index_admin.php">Ver proyectos</a>
                        </div>-->
                    </li>
                    <!--<li class="nav-item">
                        
                        <div class="p-3 d-flex ">
                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon
                            src="imagenes/35-edit-outline-edited.json"
                            trigger="loop"
                            delay="1000"
                            colors="primary:#FFFFFF"
                            style="width:50px;height:50px;">
                            </lord-icon>
                            <a class="nav-link active" aria-current="page"  href="galeria.php">Abm</a>
                        </div>
                   
                    </li>-->
                    <li class="nav-item">
                        <div class="container-fluid">
                            <a class="navbar-brand p-4 d-flex" href="cerrar.php">
                            <img src="imagenes/business.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            <span>Cerrar Sesión de Usuario : <?php echo $_SESSION['usuario']; ?> </span>
                            </a>
                        </div>
                        <!--<div class="p-3 d-flex ">
                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon
                                src="imagenes/1725-exit-sign-outline-edited.json"
                                trigger="loop"
                                delay="1000"
                                colors="primary:#FFFFFF"
                                style="width:50px;height:50px;">
                            </lord-icon>
                            <a class="nav-link active" href="cerrar.php">
                            <span>Cerrar Sesión de Usuario: <?php echo $_SESSION['usuario']; ?> </span> </a> 
                        </div>-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
<!--cierro el container -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="envio.js"></script>
</body>
</html>