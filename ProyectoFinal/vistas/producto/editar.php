<div class="card">
    <div class="card-header">
            Buscar por ID
        <div class="mb-3">
            <input type="text"
            class="form-control" name="ID" id="ID" aria-describedby="helpId" placeholder="Ingrese el id de vehiculo">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="Buscar">
    </div>
</div>

<div class="card" color="red">
    <div class="card-header">
        Editar Vehiculo
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="ID" class="form-label">ID: </label>
              <input type="text" class="form-control" name="ID" 
              value="<?php if (!empty($automovil)) {echo $automovil -> ID ;} ?>" readonly ID="ID" aria-describedby="helpId" >
            </div>

            <div class="mb-3">
              <label for="marca" class="form-label">Marca: </label>
              <input type="text" class="form-control" name="marca" id="marca" 
              value=" <?php if (!empty($automovil)) {echo $automovil -> Marca ;}?>" aria-describedby="helpId" placeholder="Nombre del vehiculo">
            </div>

            <div class="mb-3">
              <label for="modelo" class="form-label">Modelo: </label>
              <input type="text" class="form-control" name="modelo" id="modelo" 
              value=" <?php if (!empty($automovil)) {echo $automovil -> Modelo ;}?>" aria-describedby="helpId" placeholder="Modelo del vehiculo">
            </div>

            <div class="mb-3">
              <label for="año" class="form-label">Año: </label>
              <input type="text" class="form-control" name="año" id="año" 
              value=" <?php if (!empty($automovil)) {echo $automovil -> Año ;}?>" aria-describedby="helpId" placeholder="Año del vehiculo">
            </div>

            <div class="mb-3">
              <label for="precio" class="form-label">Precio: </label>
              <input type="text" class="form-control" name="precio" id="precio" value="
              <?php if (!empty($automovil)) {echo $automovil -> Precio ;} ?>" aria-describedby="helpId" placeholder="Precio unitario del vehiculo">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar">
            <a href="Index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>