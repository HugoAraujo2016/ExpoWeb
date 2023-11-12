<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Login</title>
</head>

<body>
    <!-- Login -->
    <section>
     <form method="post" action="">
        <?php include "include/conexion_bd.php"; ?> 
         <?php include "include/control_login.php";?> 
        <div class= "from-box"> 
            <div class="from-value">
                <div action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="usuario" required  name="usuario">
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required  name="contrasena">
                        <label for="">Contraseña</label>
                    </div>
                   
                   
                    
                    <!-- <button>Login  </button> -->

                    <input name="botoningresar" class="btn" type="submit" value="INICIAR SESION">
                     <div class="register"> 
                        <!-- <p>No tengo cuenta <a href="#">Register</a></p> -->
                        
                    
                </div>
               
            </div>
        </div>
     </form>   -
    </section>
    
 
    
    
    
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- End Login -->
    
</body>
</html>