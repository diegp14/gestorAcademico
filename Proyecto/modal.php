<!-- Modal -->
<div class="modal fade" id="modal-materia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear asignatura</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertMateria.php" method="post" id ='form'>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name ='materia' >
                <label for="floatingInput">Asignatura * </label>
                
            </div>
            <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert" style="display: none;">
                Campo asignatura obligatorio 
            </div>
            <p>* campos obligatorios</p>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="registrarMateria()"  style="width: 50%;">Crear</button>
      </div>
    </div>
  </div>
</div>

<script>
    function registrarMateria(){
        let materia = document.getElementById("floatingInput").value
        if ( materia == '' || materia == null) {
            document.getElementById('alert').style.display = 'block';
        }else{
            document.getElementById('form').submit();
        }
    }
</script>