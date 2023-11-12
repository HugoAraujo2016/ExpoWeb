<!DOCTYPE html>
<html lang="en">
<head>
<?php include "include/header.php"; ?>

</head>
    <body>
<style>
   body{
    min-height:100vh;
    background: url('imagenes/Bck-oscuro-1.jpg') no-repeat ;
    background-size: cover;
    background-position: center; 
  }
  .button-inicio {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: none;
    background-color: #3498db; /* Color de fondo */
    color: white; /* Color de texto */
    border-radius: 5px; /* Bordes redondeados */
    transition: background-color 0.3s, color 0.3s; /* Transición suave al pasar el cursor */
}

.button-inicio:hover {
    background-color: rgb(58, 198, 79); /* Cambio de color al pasar el cursor */
}
  </style>
   <div style="color: white; font-weight: bold; border: 1px solid black; padding: 10px;">
    <br><br>
    <div>
        <a href="index.php" class="button-inicio" style="color: white;">Inicio</a>
    </div>
    <br>
    <div class="text-center my-4">
        <h1> Productos en inventario</h1>
    </div>
</div>
<?php include 'include/conexion_bd.php';
  
if (isset($_POST['btnguardar'])){
    $producto=$_POST['txtproducto'];
    $cantidad=$_POST['txtcantidad'];
    $codigo=$_POST['txtcodigo'];



if (!empty($producto && $cantidad && $codigo)){
    $insert = $conexion->prepare("Insert into productos (producto,cantidad,codigo) values(:producto,:cantidad,:codigo)");
    $insert ->bindParam(':producto',$producto);
    $insert ->bindParam(':cantidad',$cantidad);
    $insert ->bindParam(':codigo',$codigo);
    $insert ->execute();



if($insert->rowCount()){
    echo'Datos insertados correctamente';
    }else {
    echo'Problema al intentar insertar datos, consulte al admin';
    }
    

}
else{
    echo 'Campos vacios, favor de llenar completamente los campos.';
    }
}
if(isset($_POST['btnUpdate'])){
  $producto2 = $_POST['txtproducto'];
  $cantidad2 = $_POST['txtcantidad'];
  $codigo2 = $_POST['txtcodigo'];
  $id = $_POST['txtid'];
  if(!empty($producto2 && $cantidad2 && $codigo2)){
    $update=$conexion->prepare("update productos set producto=:producto2, cantidad=:cantidad2,codigo=:codigo2  where id=".$id);
    $update->bindParam(':producto2',$producto2);
    $update->bindParam(':cantidad2',$cantidad2);
    $update->bindParam(':codigo2',$codigo2);
    $update->execute();

    if($update->rowCount()){
      echo 'Datos actualizados';
    }else{
      echo 'Fallo la actualizacion';
    }
  }else{
    echo 'Campos vacios, favor de llenar';
  }
}

if(isset($_POST['btnDelete'])){
  $delete=$conexion->prepare("delete from productos where id=".$_POST['btnDelete']);
  $delete->execute();
  if($delete->rowCount()){
    echo 'Datos eliminados';
  }else{
    echo 'Datos no borrados';
  }
}

?>
        <br><br>


        <br>
    <table id="productTable" class="table table-dark">
      <thead>
        <th>ID</th>
        <th> Nombre del producto</th>
        <th>Cantidad</th>
        <th>Codigo</th>
        <!-- <th>EDITAR</th>
        <th>BORRAR</th> -->
      </thead>
      <tbody>
      <?php
    $select = $conexion->prepare("select * from productos");
    $select->execute();
    while($row = $select->fetch(PDO::FETCH_OBJ)){
      echo'
      <tr class="table-info">
        <td class="table-secondary" >'.$row->id.'</td>
        <td>'.$row->producto.'</td>
        <td class="table-warning" >'.$row->cantidad.'</td>
        <td class="table-warning" >'.$row->codigo.'</td>

      </tr>
      ';
    }
?>


</body>
</html>