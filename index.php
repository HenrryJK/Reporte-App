<?php
    include("servidor.php");
    $cliente = "SELECT * FROM cliente";
    $detalle = "SELECT * FROM detalle;";
    $producto = "SELECT * FROM producto";
    $venta ="SELECT * FROM venta";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    
</head>
<body>
<div class="container mt-5 p-5">
<div class="row">
        <div class="col mt-2">
             Seleccione Empleado
                <form  class="mt-2" action="insertar.php" method="POST" >
                 <select class="col_01">
                     <?php  $resultado = mysqli_query($conexion , $cliente);
                      while($row = mysqli_fetch_assoc($resultado)) { ?>
                    <option class="opciones"> <?php echo $row["nombres"] ?> </option>
                   <?php } mysqli_free_result($resultado) ?>
                    </select>
                        
                        </div>
                        <div class="col mt-2">
                            <label for="fechaInicio" class="form-label">Fecah Inicio</label>
                            <input type="date" class="form-control" name="f1" id="fechaInicio" required='true'>
                        </div>
                        <div class="col mt-2">
                            <label for="fechaFin" class="form-label">Fecha Fin</label>
                            <input type="date" class="form-control" name="f2" id="fechaFin" required='true'>
                        </div>

                    <div class="row justify-content-start text-center" action="insertar.php">
                    <div class="col_02">
                        <submit class="btn btn-danger btn-block">Generar Reporte XML </submit>
            
                    </div>
                   
                    </div>
                </form>
    </div>

    
              
    </div>
    <div class="container-table">
     <div class="table__title"> REPORTE</div>
     <div class="table__header">Fecha Inicio</div>
     <div class="table__header">Fecha Fin</div>
     <div class="table__header">PRECIO</div>
     <div class="table__header">Producto</div>
    
      
    
    
 
    </div>

</body>
</html>