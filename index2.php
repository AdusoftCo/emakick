<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php include 'conexion.php';?>
<?php

$conexion = new conexion();

$sql = "SELECT femeninterior.id_prov, femeninterior.cod_art, femeninterior.descripcion, femeninterior.precio_doc, 
        femeninterior.precio_oferta, fabricants.nombre FROM femeninterior INNER JOIN fabricants ON femeninterior.id_prov=fabricants.id";
/*$datos = $conexion->consultar($sql);*/
$damas = $conexion -> consultar($sql);

$sql = "SELECT medias.id_prov, medias.cod_art, medias.descripcion, medias.precio_doc, medias.precio_oferta,
        fabricants.nombre FROM medias INNER JOIN fabricants ON medias.id_prov=fabricants.id";
$medias = $conexion -> consultar($sql);
?>
   <!DOCTYPE html>
   <html lang="es">
   <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Portafolio2</title>
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/estilos2.css" rel="stylesheet">
    </head>
<body>
  <!-- Navegación -->
    <header id="header">
        <div class="container">
          
            <h1><a href="#">Lenceria EmaKick's</a></h1>
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2><span>Venta por Mayor y Menor</span></h2>

            <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="nav-link active" href="#header">Home</a></li>
                  <li><a class="nav-link" data-toggle="modal" data-target="#portfolio">Lista de Precios</a></li>
                  <li><a class="nav-link" data-toggle="modal" data-target="#contacto">Contacto</a></li>
                  <li><a class="nav-link" href="login.php">Acceder CRUD</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a href="https://twitter.com" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" class="instagram"><i class="bi bi-instagram"></i></a>
                <a class="whatsapp" id='WSP'  href="" Target="_blank"><i class="bi bi-whatsapp"></i></a>
            </div>

        </div>
    </header><!-- End Header -->


<!-- Modal -->
<div class="modal fade" id="portfolio" role="dialog" aria-hidden="true" aria-labelledby="portfol" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-dark" id="portfol"><strong>Lista de Categorias</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="accordion" id="listaDeCategorias">
            <div class="card">
              <div class="card-header bg-light text-secondary" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#damas" aria-expanded="true" aria-controls="damas">
                    Damas
                  </button>
                </h2>
              </div>

              <div id="damas" class="collapse show" aria-labelledby="headingOne" data-parent="#listaDeCategorias">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead>
                        <tr>
                          <th scope="col">Codigo</th>
                          <th scope="col">Fabricante</th>
                          <th scope="col">Detalle</th>
                          <th scope="col">PrecioDoc</th>
                          <th scope="col">PrecioUni</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        foreach($damas as $d){ ?>
                        
                          <tr>
                            <td><?php echo $d['cod_art']; ?></td>
                            <td><?php echo $d['nombre']; ?></td>
                            <td><?php echo $d['descripcion']; ?></td>
                            <td><?php echo $d['precio_doc']; ?></td>
                            <td><?php echo $d['precio_oferta']; ?></td>
                          </tr>
                        <?php 
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-light text-secondary" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#medias" aria-expanded="true" aria-controls="medias">
                    Medias
                  </button>
                </h2>
              </div>
              <div id="medias" class="collapse" aria-labelledby="headingTwo" data-parent="#listaDeCategorias">
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead>
                        <tr>
                          <th scope="col">Codigo</th>
                          <th scope="col">Fabricante</th>
                          <th scope="col">Detalle</th>
                          <th scope="col">PrecioDoc</th>
                          <th scope="col">PrecioUni</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        foreach($medias as $m){ 
                        ?>
                          <tr>
                            <td><?php echo $m['cod_art'];?></td>
                            <td><?php echo $m['nombre'];?></td>
                            <td><?php echo $m['descripcion'];?></td>
                            <td><?php echo $m['precio_doc'];?></td>
                            <td><?php echo $m['precio_oferta'];?></td>
                          </tr>
                        <?php 
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-light text-secondary" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Más artículos
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#listaDeCategorias">
                <div class="card-body">
                  Lista de artículos.
                </div>
              </div>
            </div>
          </div>

        <!--</div>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


    
<!-- ======= Contacto Section ======= -->
<div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="contacto" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contacto">Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container d-flex justify-content-center">
            <div class="border-3 col-8"  >
                <form action="js/envio.js" method='post' >
                        <div class="mb-3">
                            
                            <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                            <br>
                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                        </div>
                        <div class="mb-3">
                        
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motivo" required>
                            <br>
                            <textarea class="form-control" name="contenido" id="contenido" cols="10" rows="5" placeholder="Mensaje" required></textarea>
                        </div>

                        
                        <button class="btn btn-light" ><a  id='WSP'  href="" Target="_blank">Enviar Whatsapp</a></button>
                        <button type="submit" class="btn btn-light"> Enviar Mail </button>
                </form>
            </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

<!--<script src="js/bootstrap.bundle.min.js"></script>-->
    
<script src="js/main.js"></script>
<script src="js/envio.js"></script>

</body>