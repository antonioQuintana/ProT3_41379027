<!-- Esta vista muestra al el tipo de perfil si es admin o user   -->

<div class="container my-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning ">
                <?= session()->getFlashdata('msg')?>
            </div>
            <?php endif;?>
            <br>
            <?php if(session()->perfil_id == 1): ?>
                <div><img class="bg-white rounded-4" src="<?= base_url('assets/img/admin-icon-off.png') ?>"></div>
        
            <?php elseif(session()->perfil_id == 2): ?>
                <div><img class="bg-white rounded-4" src="<?= base_url('assets/img/user-icon-off.png') ?>"></div>
            <?php endif; ?>
        </div>
    </div>
</div>