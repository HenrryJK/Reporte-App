<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <?php 
        include("servidor.php");
        $detalle = "SELECT p.nomprod , v.fecha  , d.precio  FROM detalle as d  INNER JOIN producto as p  ON d.idproducto = p.idproducto INNER JOIN venta as v ON d.idventa = v.idventa where v.fecha between 'f1' and 'f2'";
        $venta ="SELECT * FROM venta";

        $f1=$_POST['f1'] . "00:00:00";

        $f2=$_POST['f2'] . "23:59:59";
   ?>
   
   <title>Consultar fecha</title>
</head>
<body>
    <form  class="mt-2" action="insertar.php" method="POST">
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
                        <button class="btn btn-danger btn-block">
                           Generar Reporte XML
                        </button>
                    </div>
    </form>    
        <?php echo $f1 ?> - <?php echo $f2 ?> - <?php echo $detalle ?>
    <?php 
        $v = mysqli_query($conexion, " SELECT p.nomprod FROM detalle as d  INNER JOIN producto as p  ON d.idproducto = p.idproducto INNER JOIN venta as v ON d.idventa = v.idventa where v.fecha between 'f1' and 'f2'");
        while ($detalle = mysqli_fetch_row($v)) {
        
    ?>
                <?php echo $detalle[0]  ?> - <?php echo $detalle[2] ?>  . <?php  echo $detalle[3] ?>
         <?php  } ?>
</body>
</html>