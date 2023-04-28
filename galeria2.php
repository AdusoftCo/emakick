<?php include 'headerd.php';?>
<?php
if($_POST){  # si hay envio de datos, los inserto en la base de datos  
    #$id = $_SESSION['id'];
    $cod_art = $_POST['cod_art'];
    $id_prov = $_POST['id_prov'];
    $descripcion = $_POST['descripcion'];
    $docena = $_POST['precio_doc'];
    $oferta = $_POST['precio_oferta'];
    $fecha_alta = $_POST['fecha_alta'];
    
    #nombre de la imagen
    #$imagen = $_FILES['archivo']['name'];
    #tenemos que guardar la imagen en una carpeta 
    #$imagen_temporal=$_FILES['archivo']['tmp_name'];
    #creamos una variable fecha para concatenar al nombre de la imagen, para que cada imagen sea distinta y no se pisen 
    #$fecha = new DateTime();
    #$imagen= $fecha->getTimestamp()."_".$imagen;
    #move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
    
    #creo una instancia(objeto) de la clase de conexion
    $conexion = new conexion();
    
    $sql = "INSERT INTO `medias` (`id`, `cod_art`, `id_prov`, `descripcion`, `precio_doc`, `precio_oferta`, `fecha_alta`) 
            VALUES (NULL, '$cod_art', '$id_prov', '$descripcion', '$docena', '$oferta', '$fecha_alta')";
    
    $id_proyecto = $conexion->ejecutar($sql);

    header("location:galeria2.php");
    die();
}
 
if($_GET){
    #ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
    if(isset($_GET['borrar2'])){
        $id = $_GET['borrar2'];
        $conexion = new conexion();
        #borramos el registro de la base 
        $sql ="DELETE FROM `medias` WHERE `medias`.`id` =".$id;

        $id_proyecto = $conexion->ejecutar($sql);
         #para que no intente borrar muchas veces
         header("Location:galeria2.php");
         die();
    }

    if(isset($_GET['modifica2'])){
        $id = $_GET['modifica2'];
        header("Location:modifica2.php?modifica2=".$id);
        die();
    }
}    

$conexion = new conexion();

$sql = "SELECT `medias`.`id`, `medias`.`cod_art`, `medias`.`id_prov`, `medias`.`descripcion`, `medias`.`precio_doc`, 
        `medias`.`precio_oferta`, `fabricants`.`nombre` FROM `medias` INNER JOIN `fabricants` ON `medias`.`id_prov`=`fabricants`.`id`";
$medias = $conexion -> consultar($sql);
?> 

<!-- FORMULARIO DE ALTA DE REGISTRO -->
<h2 style="text-align:center; margin: 0; padding: 10px;"><b><i>CATEGORIA -MEDIAS-</i></b></h2>
<div class="row d-flex justify-content-center mt-0 mb-0">
    <div class="col-md-8 col-sm-10">
        <div class="card" style="background-color:#0daca5;">
            <div class="card-header text-center">
                <i><b>Alta de Nuevo Registro</b></i>
            </div>

            <div class="card-body">
                    <!--para recepcionar archivos uso enctype-->
                <form action="galeria2.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="cod_art">Codigo del Articulo</label>
                        <input required class="form-control" type="text" name="cod_art" id="cod_art">
                    </div>
                        
                    <div>
                        <label for="id_prov">Fabricante</label>
                        <!--<input required class="form-control" type="text" name="nombre" id="nombre">-->
                        <br>
                        <select required class="form-control" name="id_prov" id="id_prov">
                            <option value="0"> -Seleccione Proveedor- </option>
                            <?php
                                $conexion = new conexion();
                                $sql = "SELECT * FROM fabricants";
                                $fabrics = $conexion -> consultar($sql);
                                foreach ($fabrics as $f){ ?>
                                    <option value="<?php echo $f['id'] ?>;"> <?php echo $f['nombre']; ?> </option>
                            <?php } ?>
                            <option value="0"> -Otro Proveedor- </option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="descripcion">Detalle</label>
                        <input required class="form-control" name="descripcion" id="descripcion">
                    </div>

                    <div>
                        <label for="precio_doc">Precio x Docena</label>
                        <input required class="form-control" type="number" name="precio_doc" id="precio_doc">
                    </div>
                    
                    <div>
                        <label for="precio_ofer">Precio Oferta x Unidad</label>
                        <input required class="form-control" type="number" name="precio_oferta" id="precio_oferta">
                    </div>
                    
                    <div>
                        <label for="fecha_alta">Fecha de Alta</label>
                        <input required class="form-control" type="date" name="fecha_alta" id="fecha_alta">
                    </div>

                    <div>
                        <br>
                        <input class="btn btn-warning" type="submit" value="Enviar Registro ...">
                    </div>
                
                </form>
            </div> <!--cierra el body-->
    
        </div><!--cierra el card-->
            
    </div><!--cierra el col-->
</div><!--cierra el row-->

<!-- TABLA CON REGISTRO A MODIFICAR -->
<div style="background-color:#abd7fc;">
    <div class="row d-flex justify-content-center mb-0">
        <div class="col-md-10 col-sm-6">
            <div>
                <h2 style="text-align:center; padding: 10px;"><b>Modificar ó Borrar Registros</b></h2>
            </div>
            <table class="table tabla__galeria" style="background-color:#FAFAFA;">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Fabricante</th>
                        <th>Descripcion</th>
                        <th>Docena</th>
                        <th>OferxUni</th>
                        <th>Modificar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody >
                    <?php #leemos registros 1 por 1
                    foreach($medias as $m){ ?>
                
                    <tr >
                        <td><?php echo $m['cod_art'];?></td>
                        <td><?php echo $m['nombre'];?></td>
                        <td><?php echo $m['descripcion'];?></td>
                        <td><?php echo $m['precio_doc'];?></td>
                        <td><?php echo $m['precio_oferta'];?></td>
                        <td><a name="modifica2" id="modifica2" class="btn btn-warning" href="?modifica2=<?php echo $m['id'];?>">Modificar</a></td>
                        <td><a onclick='wantdelete(event)' name="borrar2" id="borrar2" class="btn btn-danger" href="?borrar2=<?php echo $m['id'];?>">Borrar</a></td>
                    </tr>

                    <?php #cerramos la llave del foreach
                    } ?>
                </tbody>
            </table>
            
            <h2 class="card-title text-dark card__mobile">Modificar ó Borrar Registros</h2>
            <?php #leemos proyectos 1 por 1
                foreach($medias as $m){ ?>
                <div class="col card__mobile  mb-4">
                    <div class="card border border-3 shadow w-100">
                        
                        <div class="card-body">
                            <p class="card-text text-dark"><?php echo $m['cod_art'];?></p>
                            <p class="card-text text-dark"><?php echo $m['id_prov'];?></p>
                            <p class="card-text text-dark"><?php echo $m['descripcion'];?></p>
                            <p class="card-text text-dark"><?php echo $m['precio_doc'];?></p>
                            <p class="card-text text-dark"><?php echo $m['precio_oferta'];?></p>
                            <a name="modifica2" id="modifica2" class="btn btn-warning" href="?modifica2=<?php echo $m['id'];?>">Modificar</a>
                            <a onclick='wantdelete(event)' name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar2=<?php echo $m['id'];?>">Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div><!--cierra el col-->  
    </div>
</div>
<!--Funcion para Preguntar Borrado-->
<script>
    function wantdelete(e){
        var respuest2 = confirm("Desea realmente BORRAR el Registro...?");
        if (respuest2 == false) 
        {
            e.preventDefault();
        }
    }
</script>

<?php include 'footerd.php'; ?>