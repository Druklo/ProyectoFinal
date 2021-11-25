<div class="p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center" >Los 4 vehiculos mas antiguos </h1> 
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    
        <?php 
        foreach ($vehiculo as $vehiculos) { 
        ?>

        <tr>
            <td scope="row"><?php echo $vehiculos->id ?></td>
            <td><?php echo $vehiculos->Marca ?></td>
            <td><?php echo $vehiculos->Modelo ?></td>
            <td><?php echo $vehiculos->Año ?></td>
            <td><?php echo $vehiculos->Precio ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="index.php?accion=editar&id=<?php echo $vehiculos->id ?>" class="btn btn-outline-success">Editar</a>
                    <a href="index.php?accion=borrar&id=<?php echo $vehiculos->id ?>" class="btn btn-danger">Borrar</a>
                </div>
            </td>

        </tr>

        <?php  } ?>
    </tbody>
</table>