<?php $__env->startSection('content'); ?>
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <!-- Menu -->
        <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="menu-mobile-toggler d-xl-none rounded-1">
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
                <i class="ti tabler-menu icon-base"></i>
                <i class="ti tabler-chevron-right icon-base"></i>
            </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row mb-4">
                        <div class="col-md-6 ">
                            <h3 class="card-title text-bold">Administradores</h3>
                            <p>Gestiona y accede a los administradores del sistema.</p>
                        </div>
                        <div class="col-md-3">
                            <input
                                type="text"
                                class="form-control"
                                id="buscarAdministrador"
                                placeholder="Buscar administrador...">
                        </div>
                        <div class="col-md-3">
                            <?php echo $__env->make('layouts.addAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="row" id="contenedorAdministradores"></div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <!-- <div class="layout-overlay layout-menu-toggle"></div> -->

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <!-- <div class="drag-target"></div> -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JC-INNOVATION\adminJC\adminJC\resources\views/dashboard.blade.php ENDPATH**/ ?>