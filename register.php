<?php
  require("includes/conexion.php");
  require("includes/encoder.php");
    $name=$_POST['nom'];
    $lastn=$_POST['ape'];
    $usu=$_POST['usr'];
    $pass=encryptAndEncode($_POST['pass']);
    $rpass=encryptAndEncode($_POST['rpass']);
    $corr=$_POST['eml'];
    $tel= $_POST['fon'];
    $dire=$_POST['dirr'];
    $resultado=0;
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
?>
    <html>
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>REGISTRO EDUTRONIKA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        $checkemail=mysqli_query($mysqli,"SELECT * FROM usuario WHERE crr='$corr'");
        $check_mail=mysqli_num_rows($checkemail);

            if($pass==$rpass){
                if($check_mail>0){
                    ?>
            <div class="alert alert-danger">Atencion, ya existe el mail designado para un usuario, verifique sus datos
                <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                    &times;
                </button>
            </div>
            <?php
            }
            else{
                $sql = "INSERT INTO usuario (nomUsr,apellidosUsr,sru,ctr,crr,tl,ccion,tipo_usr_idtipo_usr)
                VALUES ('$name','$lastn','$usu','$pass','$corr','$tel','$dire','2')";
                // echo"Query modificación ".$sql;
                $resultado = $mysqli->query($sql);
                }
            }else
            {
                echo '';
            } ?>
                <div class="container">
                    <div class="row">
                        <div class="row" style="text-align:center">
                            <?php if($resultado) { ?>
                            <h3>REGISTRO MODIFICADO</h3>
                            <div class="alert alert-success">Usuario registrado con éxito.</div>
                            <?php
                            echo "<script>location.href='index.php'</script>";
                            } else
                            { ?>
                            <h3>ERROR AL MODIFICAR</h3>
                            <div class="alert alert-danger">Error: Usuario no registrado exitosamente.
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">
                                    &times;
                                </button>
                            </div>
                            <a href="signUp.php" class="btn btn-primary">Regresar</a>
                            <?php }

                    ?>

                        </div>
                    </div>
                </div>
    </body>

    </html>
