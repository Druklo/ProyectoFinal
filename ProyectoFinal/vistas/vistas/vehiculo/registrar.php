<div class="card">
    <div class="card-header">
        Agregar vehiculo
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="marca" class="form-label">Marca: </label>
              <input type="text"
                class="form-control" name="marca" id="marca" aria-describedby="helpId" placeholder="Marca del vehiculo">
            </div>
            <div class="mb-3">
              <label for="modelo" class="form-label">Modelo: </label>
              <input type="text"
                class="form-control" name="modelo" id="modelo" aria-describedby="helpId" placeholder="Modelo del vehiculo">
            </div>
            <div class="mb-3">
              <label for="año" class="form-label">Año: </label>
              <input type="text"
                class="form-control" name="año" id="año" aria-describedby="helpId" placeholder="Año del vehiculo">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio: </label>
              <input type="text"
                class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio del vehiculo">
            </div>

            <input name="btn" id="" class="btn btn-outline-success" type="submit" value="Registrar">
            <a href="index.php?accion=inicio" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
    
    <div><?php if(!empty($error)) {echo $error;}  ?> </div>

</div>