<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="main.css" rel="stylesheet">
    
    
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Importaciones y exportaciones</title>
</head>
<body>
    <!-- Inicio Navbar -->
    <section>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Temarios y repasos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Temarios y repasos</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Asignaturas
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Programación imperativa</a></li>
              <li><a class="dropdown-item" href="#">Programación orientada a objetos</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <!--<li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>-->
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="salir">
          
          <button class="btn btn-danger" type="submit">Salir</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    <!-- Fin Navbar -->
<!--Contenido-->

<ul id="menu">
    
   <li><input type="checkbox" name="list" id="nivel1-1"><label for="nivel1-1">Programacion imperativa</label><!--Materias-->
   <ul class="interior">
         <li><input type="checkbox" name="list" id="nivel2-1"><label for="nivel2-1">Nivel 2</label>
           <ul class="interior">
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
            </ul>
         </li>
         <li><input type="checkbox" name="list" id="nivel2-2"><label for="nivel2-2">Nivel 2</label>
           <ul class="interior">
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
            </ul>
         </li>
         <li><a href="#r">Nivel 2</a></li>
      </ul>
   </li>
   <li><input type="checkbox" name="list" id="nivel1-2" checked=""><label for="nivel1-2">Nivel 1</label>
      <ul class="interior">
         <li><a href="#r">Nivel 2</a></li>
         <li><input type="checkbox" name="list" id="nivel2-3"><label for="nivel2-3">Nivel 2</label>
           <ul class="interior">
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
            </ul>
         </li>
         <li><input type="checkbox" name="list" id="nivel2-4"><label for="nivel2-4">Nivel 2</label>
         <ul class="interior">
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
             <li><a href="#r">Nivel 3</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href="#r">Nivel 1</a></li>
</ul>




<!--fin contenido-->

</body>

<footer class="bg-dark text-center text-white">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
</html>