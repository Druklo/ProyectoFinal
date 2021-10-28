<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vehiculos as $vehiculo) 
        { ?>
        <tr>
            <td scope="row"><?php echo $vehiculo->id ?></td>
            <td><?php echo $vehiculo->Marca ?></td>
            <td><?php echo $vehiculo->Modelo ?></td>
            <td><?php echo $vehiculo->Anio ?></td>
            <td><?php echo $vehiculo->Precio ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="index.php?accion=editar&id=<?php echo $vehiculo->id ?>" class="btn btn-info">Editar</a>
                    <a href="index.php?accion=borrar&id=<?php echo $vehiculo->id ?>" class="btn btn-danger">Borrar</a>
                </div>
            </td>

        </tr>

        <?php  } ?>
    </tbody>
</table>