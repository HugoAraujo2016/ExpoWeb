
<!doctype html>
<html lang="en" data-bs-theme="auto">

<!-- Head -->
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
<!-- Favicons -->
<style>
        /* Agrega el estilo para el fondo */
        .album {
            background-image: url('imagenes/Inventario_bg.jpg'); /* Cambia 'ruta_de_tu_imagen.jpg' por la ruta real de tu imagen de fondo */
            background-size: cover; /* Ajusta la imagen al tamaño de la sección */
            background-repeat: no-repeat; /* Evita la repetición de la imagen */
            background-position: center; /* Centra la imagen en la sección */
        }
        body{
    min-height:100vh;
    background: url('imagenes/Bck-oscuro-4.jpg') no-repeat ;
    background-size: cover;
    background-position: center; 
  }
  footer {
            background-color: white; /* Cambiar color de fondo a blanco */
            color: black; /* Cambiar color de texto a negro */
            font-weight: bold; /* Aplicar negritas */
            padding: 20px; /* Espaciado interno */
            text-align: center;
            border-top: 1px solid #ccc; /* Agregar borde en la parte superior */
        }
        .btn-whatsapp {
            display: inline-block;
            padding: 10px 20px;
            background-color: green; /* Cambiar color de fondo */
            color: white; /* Cambiar color de texto */
            border: 2px solid green; /* Agregar borde */
            text-decoration: none;
            border-radius: 5px; /* Agregar bordes redondeados */
        }

        .btn-whatsapp:hover {
            background-color: darkgreen; /* Cambiar color de fondo en hover */
            border-color: darkgreen; /* Cambiar color del borde en hover */
        }
        .button-inicio {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: none;
    background-color: green; /* Color de fondo */
    color: white; /* Color de texto */
    border-radius: 5px; /* Bordes redondeados */
    transition: background-color 0.3s, color 0.3s; /* Transición suave al pasar el cursor */
}
    </style>


  </head>
  <body>

</header>

<style>
 

</style>
<br><br><br>


  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="imagenes/InventarioBackground.jpg" width="100%" height="225"  role="img" width="100%" ></img>
            <div class="card-body">
              <p class="card-text text-center" >Ver inventario</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="ver_productos.php"type="button" class="btn btn-primary">Entrar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="imagenes/Aumenter.jpg" src="imagenes/Aumenter.jpg" width="100%" height="225"  role="img" width="100%" ></img>
            <div class="card-body">
              <p class="card-text text-center">Modificar Inventario</p>
              <div class="d-flex justify-content-between align-items-center">
              <a href="ingresar_producto.php"type="button" class="btn btn-success">Entrar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" >
            <img class="imagenes/Desconar.avif" src="imagenes/Desconar.avif" width="100%" height="225"  role="img" width="100%" ></img>
            <div class="card-body">
              <p class="card-text text-center">Eliminar</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="descontar_producto.php"type="button" class="btn btn-danger">Entrar</a>
              </div>
            </div>
          </div>
        </div>
  </div>

</main>
<!-- Footer -->

    <div style="color: white; font-weight: bold;   padding: 12px;">
    <p class="mb-">Elaborado por Hugo Araujo</p>
      </div>
    <p style="color: white" class="mb-1">Contacto:  <a href="https://api.Whatsapp.com/send?phone=52686124335" class="button-inicio" target="_blank">Whatsapp</a> </p>
          
  </div>
</footer>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
