<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Eliminar Producto</title>
    <?php include "include/header.php"; ?>
<script>
function confirmDelete() {
    return confirm("Esta seguro de querer eliminar el producto?");
}
</script>

</head>

<body>
<style>

body{
    min-height:100vh;
    background: url('imagenes/Bck-oscuro-4.jpg') no-repeat ;
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
  </style>

<div style="color: white; font-weight: bold; border: 1px solid black; padding: 10px;">

    <div>
<div class="d-flex justify-content-between align-items-center">
      <a href="index.php"type="button" class="button-inicio">Inicio</a>
    </div>
    <div class="text-center my-4">
    <h1>Eliminar Producto</h1>
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
     
        <div>
       <div class="center">
            
                <form action="" method="post" >
                <h1>Productos</h1>
                <?php
                    if(isset($_POST['btnEdit'])){
                        $select = $conexion->prepare("select * from productos where id=".$_POST['btnEdit']);
                        $select->execute();
                        if($select){
                        $row=$select->fetch(PDO::FETCH_OBJ);
                        echo '
                        <p><input  type="hidden" class="from_imput_edit" type="text"  name="txtproducto" value="'.$row->producto.'" placeholder="Nombre Producto"></p>
                        <p><input type="hidden" class="from_imput_edit" type="text" name="txtcantidad" value="'.$row->cantidad.'" placeholder="Precio Producto"></p>
                        <p><input type="hidden" class="from_imput_edit" type="text" name="txtcodigo" value="'.$row->codigo.'" placeholder="Nombre Producto"></p>
                        <p><input type="hidden" name="txtid" value="'.$row->id.'"></p>
                        <button class="btn-3" type="submit" name="btnUpdate" >Actualizar</button>
                        <button class="btn-4" type="submit" name="btnCancel">Cancelar</button>';
                        }
                    }else{
                        echo'<div      type="hidden" class="forma"><p><input type="hidden" class="from_imput" type="text" name="txtproducto" placeholder="Nombre del Producto"></p>
                        <p><input type="hidden" class="from_imput" type="text" name="txtcantidad" placeholder="Cantidad"></p>
                        <p><input type="hidden" class="from_imput" type="text" name="txtcodigo" placeholder="Codigo"></p>
                        <input type="hidden" type="submit" value="Guardar" name="btnguardar" class="btn btn-success"></div>';
                    }
                ?> 
      

        <br>
    <table id="productTable" class="table table-dark">
      <thead>
        <th>ID</th>
        <th> Nombre del producto</th>
        <th>Cantidad</th>
        <th>Codigo</th>
        <th>Borrar</th>
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
        <td class="table-primary" >'.$row->codigo.'</td>
        <td  class="table-danger" ><button class="btn-2" type="submit" value="'.$row->id.'" name="btnDelete" onclick="return confirmDelete();">ELIMINAR</button></td>
      </tr>
      ';
    }
?>
  
</body>

</html>
