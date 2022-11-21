<?php
include './includes/header.php';
include './DB/db_materias.php';
session_start();
$user = $_SESSION['username'];
$nombre = $_SESSION['nombre'];
$rol = $_SESSION['rol'];
?>



<div class="container-fluid  py-4 ">

    <?php
        if ($rol =="admin") {  
    ?>
    <div class="float-end me-5">
        <button class="tooltip2 btn btn-light " data-bs-toggle="modal" data-bs-target="#modal-materia">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            <span class="tooltiptext2 ">Agregar materia</span>
        </button>
    </div>
<?php }?>
    <h2 class="text-center mb-3  ">Asignaturas</h2>
    <div class="row m-0">
    <?php
                    $query = "SELECT * FROM tasignatura";
                    $result = mysqli_query($cnx, $query);
                    while ($fila = mysqli_fetch_array($result)) {  ?>

        <div class="col col-md-4 ">
            <div class="card pb-5" style=" height:220px">
                <div class="mx-2 my-3 "> 
                    <a href="temas.php?id=<?=$fila['idTAsignatura']?>" class="text-decoration-none text-reset">
                        <img src="./img/code.jpg"  class="card-img-top" alt="..."  height="120px" width="100px" >
                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <a href="temas.php?id=<?=$fila['idTAsignatura']?>" class="text-decoration-none text-reset">
                            <h5 class="card-title"><?=$fila['Asignatura']?></h5>
                        </a>
                        <?php
                            if ($rol =="admin") {  
                        ?>   
                        <a class="nav-link dropdown-toggle text-reset" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">  
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="actualizar.php?id=<?=$fila['idTAsignatura']?>">Editar</a></li>
                            <li><a class="dropdown-item" href="eliminar.php?id=<?=$fila['idTAsignatura']?>">Eliminar</a></li>
                  
                        </ul>
                        <?php } ?>
                    </div>
                </div>
        
            </div>
        </div>
        <?php
        }
        ?>
    </div>




<?php
    include './modal.php';
    include './includes/footer.php';
?>




