<?php
include './includes/header.php';
include './DB/db_materias.php';

?>
<div class="container-fluid py-4">
    <div class="float-end me-5">
            <button class="tooltip2 btn btn-light ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                <span class="tooltiptext2 ">Agregar tema</span>
            </button>
        </div>
    <h2 class="text-center mb-3 ">Temas </h2>

</div>

<?php
include './includes/footer.php';


?>