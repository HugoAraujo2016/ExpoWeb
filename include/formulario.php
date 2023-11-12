
<php?>

    <div>
    <br><br><br>
        <div class="center">
            <div class= "from-box" >
                <form action="" method="post" >
                <h1>Productos</h1>
                <?php
                    if(isset($_POST['btnEdit'])){
                        $select = $conexion->prepare("select * from productos where id=".$_POST['btnEdit']);
                        $select->execute();
                        if($select){
                        $row=$select->fetch(PDO::FETCH_OBJ);
                        echo '
                        <p><input class="from_imput_edit" type="text" name="txtproducto" value="'.$row->producto.'" placeholder="Nombre Producto"></p>
                        <p><input class="from_imput_edit" type="text" name="txtcantidad" value="'.$row->cantidad.'" placeholder="Precio Producto"></p>
                        <p><input class="from_imput_edit" type="text" name="txtcodigo" value="'.$row->codigo.'" placeholder="Nombre Producto"></p>
                        <p><input type="hidden" name="txtid" value="'.$row->id.'"></p>
                        <button class="btn-3" type="submit" name="btnUpdate" >Actualizar</button>
                        <button class="btn-4" type="submit" name="btnCancel">Cancelar</button>';
                        }
                    }else{
                        echo'<div class="forma"><p><input class="from_imput" type="text" name="txtproducto" placeholder="Nombre del Producto"></p>
                        <p><input class="from_imput" type="text" name="txtcantidad" placeholder="Cantidad"></p>
                        <p><input class="from_imput" type="text" name="txtcodigo" placeholder="Codigo"></p>
                        <input type="submit" value="Guardar" name="btnguardar" class="btn btn-success"></div>';
                    }
                ?>
    </div>       
</php?>