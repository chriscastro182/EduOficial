
<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require 'includes/conexion.php';

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM producto ORDER BY idP";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['producto']))
{
	$q=$mysqli->real_escape_string($_POST['producto']);
	$query="SELECT * FROM producto WHERE
		idP LIKE '%".$q."%' OR
		nomPro LIKE '%".$q."%' OR
		cst LIKE '%".$q."%' OR
		stock LIKE '%".$q."%' OR
		ipcion LIKE '%".$q."%'";
}

  $buscarProducto = $mysqli->query($query);
//	$buscarProductos = $resultado->fetch_array(MYSQLI_ASSOC);
// $buscarProductos=$conexion->query($query); //
if ($buscarProducto->num_rows > 0)
{
	$tabla.=
	'<container>';

	while($filaProducto= $buscarProducto->fetch_assoc())
	{
		$tabla.=
		'
		<div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img src="'.$filaProducto['img'].'" alt="">
										
                    <div class="modal fade" id="ventana1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Encabezado de la ventana -->
                                <div class="modal-header">
                                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3 class="modal-tittle">'.$filaProducto['nomPro'].'</h3>
                                </div>
                                <!-- Contenido de la ventana -->
                                <div class="modal-body">
                                    <p>
									'.$filaProducto['ipcion'].'
                                    </p>
                                    <img src="'.$filaProducto['img'].'" alt="">
                                </div>
                                <!-- Pie de pagina de la ventana -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
				<div class="caption">
                    <!--    <h4 class="pull-right">$ '.$filaProducto['cst'].'</h4> -->
                        <h4><a href="#">'.$filaProducto['nomPro'].'</a>
                          <p><a href="modificar_producto.php?id='.$filaProducto['idP'].'"><span class="glyphicon glyphicon-pencil">
													<a href="eliminar_producto.php?id='.$filaProducto['idP'].'"><span class="glyphicon glyphicon-remove"></span></a></p>

                        </h4>
                        <p>'.$filaProducto['ipcion'].' </p>
                    </div>
                </div>
			</div>

          </div>
        </div>
		';
	}

	$tabla.='</container>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
