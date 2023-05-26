<?php include 'headerd.php';?>

<?php
#Seccion que TOMA variables para ALTA de Registro
if($_POST){  
    # si hay envio de datos, los inserto en la base de datos  

    #debemos recuperar la imagen actual y borrarla del servidor para lugar pisar con la nueva imagen en el server y en la base de datos
    #recuperamos la imagen de la base antes de borrar 
    #$imagen = $conexion->consultar("select imagen FROM `proyectos` where id=".$id);
    #la borramos de la carpeta 
    #unlink("imagenes/".$imagen[0]['imagen']);

    #levantamos los datos del formulario
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
    
    $sql = "INSERT INTO `femeninterior` (`id`, `cod_art`, `id_prov`, `descripcion`, `precio_doc`, `precio_oferta`, `fecha_alta`) 
            VALUES (NULL, '$cod_art', '$id_prov', '$descripcion', '$docena', '$oferta', '$fecha_alta')";
    
    $id_proyecto = $conexion->ejecutar($sql);

    header("location:galeria.php");
    die();
}
#Seccion que TOMA variables pa Borrar o Modificar Registro
if($_GET){
    if(isset($_GET['modificar'])){
        $id = $_GET['modificar'];
        header("Location:modificar.php?modificar=".$id);
        die();
    }

    #ademas de borrar de la base , tenemos que borrar la foto de la carpeta imagenes
    if(isset($_GET['borrar'])){
        $id = $_GET['borrar'];
        $conexion = new conexion();

        #borramos el registro de la base 
        $sql ="DELETE FROM `femeninterior` WHERE `femeninterior`.`id` =".$id; 
        $id_proyecto = $conexion->ejecutar($sql);
         #para que no intente borrar muchas veces
         header("Location:galeria.php");
         die();
    }
}    

$conexion = new conexion();
$sql = "SELECT `femeninterior`.`id`, `femeninterior`.`cod_art`, `femeninterior`.`id_prov`, `femeninterior`.`descripcion`, `femeninterior`.`precio_doc`, 
        `femeninterior`.`precio_oferta`, `fabricants`.`nombre` FROM `femeninterior` INNER JOIN `fabricants` ON `femeninterior`.`id_prov`=`fabricants`.`id`";

$damas = $conexion -> consultar($sql);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- FORMULARIO DE ALTA DE REGISTRO -->
<h2 style="text-align:center; margin: 0; padding: 10px;"><b><i>CATEGORIA -DAMAS-</i></b></h2>
<div class="row d-flex justify-content-center mt-0 mb-0">
    <div class="col-md-8 col-sm-10">
        <div class="card" style="background-color:#2bb6b0;">
            <div class="card-header text-center">
                <i><b>ALTA de Nuevo Registro</b></i>
            </div>

            <div class="card-body">
                    <!--para recepcionar archivos uso enctype-->
                <form action="#" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="cod_art">Codigo del Articulo</label>
                        <input required class="form-control" type="text" name="cod_art" id="cod_art">
                    </div>
                        
                    <div>
                        <label for="id_prov">Fabricante</label>
                        <!--<input required class="form-control" type="number" name="id_prov" id="id_prov">-->
                        <br>
                        <select required class="form-control" name="id_prov" id="id_prov">
                            <option value="0"> -Seleccione Proveedor- </option>
                            <?php
                                $conexion = new conexion();
                                $sql2 = "SELECT * FROM fabricants";
                                $fabrics = $conexion -> consultar($sql2);
                                foreach ($fabrics as $f){ ?>
                                    <option value="<?php echo $f['id'] ?>"><?php echo $f['nombre'] ?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                    
                    <div>
                        <label for="descripcion">Descripción</label>
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
                        <input class="btn btn-warning" type="submit" value="Grabar Registro" onclick="processForm(event);">
                    </div>
                
                </form>
            </div> <!--cierra el body-->
    
        </div><!--cierra el card-->
            
    </div><!--cierra el col-->
</div><!--cierra el row-->

<!-- TABLA CON LOS REGISTROS ACTUALES -->
<div style="background-color:#abd7fc;">
    <div class="row d-flex justify-content-center mb-5">
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
                    foreach($damas as $dama){ ?>
                        <tr>
                            <td><?php echo $dama['cod_art'];?></td>
                            <td><?php echo $dama['nombre'];?></td>
                            <td><?php echo $dama['descripcion'];?></td>
                            <td><?php echo $dama['precio_doc'];?></td>
                            <td><?php echo $dama['precio_oferta'];?></td>
                            <td><a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?php echo $dama['id']; ?>">Modificar</a></td>
                            <td><a onclick='wantdelete(event)' name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $dama['id']; ?>">Borrar</a></td>
                        </tr>
                    <!--cerramos la llave del foreach-->
                    <?php 
                    } ?>
                </tbody>
            </table>

        <!--Tabla con Registros en Mobile-->
            <h2 class="card-title text-center card__mobile">Listado de Artículos Ingresados</h2>
            <?php #leemos proyectos 1 por 1
                foreach($damas as $dama){ ?>
                <div class="col card__mobile  mb-4">
                    <div class="card border border-3 shadow w-100">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="col">Cod.Artículo: </th>
                                        <td><?php echo $dama['cod_art'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Proveedor    : </th>
                                        <td><?php echo $dama['nombre'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Descripción  : </th>
                                        <td><?php echo $dama['descripcion'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Precio Docena: $</th>
                                        <td><?php echo $dama['precio_doc'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Oferta Unidad: $</th>
                                        <td><?php echo $dama['precio_oferta'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <a name="modificar" id="modificar" class="btn btn-warning" href="?modificar=<?php echo $dama['id'];?>">Modificar</a>
                                    <a onclick='wantdelete(event)' name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $dama['id'];?>">Eliminar</a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!--<div class="card-body">
                            <p class="card-text text-dark"></p>
                            <p class="card-text text-dark"></p>
                            <p class="card-text text-dark"></p>
                            <p class="card-text text-dark"></p>
                            <p class="card-text text-dark"></p>
                            
                        </div>-->
                    </div>
                </div>
            <?php } ?>
        </div><!--cierra el col-->  
    </div>
    <?php include 'footerd.php'; ?>
</div>

<!--Funcion para Preguntar Borrado-->

<script type="text/javascript">
    function processForm(e) {
        var respuest = confirm("Desea GRABAR el Registro ...?");
        if (respuest == false) {
            e.preventDefault();
        }else{
            alert('ALTA Exitosa !!!');
        }
    }

    function wantdelete(e) {
        var respuest2 = confirm("Desea realmente BORRAR el Registro ...?");
        if (respuest2 == false) {
            e.preventDefault();
        }else{
            alert('BORRADO Con fir ma do !!!');
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>
