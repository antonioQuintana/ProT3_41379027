<!--Esta vista se agregará debajo del icono luego de inciar sesión 
para que el administrador pueda gestionar los usuarios-->

<div class="container my-5">
    <h2 class="text-white">Usuarios</h2>
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-info"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Perfil</th>
                <th>Baja</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= esc($usuario['id_usuario']) ?></td>
                <td><?= esc($usuario['nombre_ape']) ?></td>
                <td><?= esc($usuario['email']) ?></td>
                <td><?= esc($usuario['telefono']) ?></td>
                <td><?= esc($usuario['perfil_id']) ?></td>
                <td><?= esc($usuario['baja']) ?></td>
                <td>
                    <a href="<?= base_url('admin/usuario/editar/'.$usuario['id_usuario']) ?>" class="btn btn-sm btn-primary">Editar</a>
                    <a href="<?= base_url('admin/usuario/baja/'.$usuario['id_usuario']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Dar de baja este usuario?')">Baja</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>