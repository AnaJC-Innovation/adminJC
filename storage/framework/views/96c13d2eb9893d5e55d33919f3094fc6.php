<!doctype html>

<html
    lang="en"
    class=" layout-navbar-fixed layout-menu-fixed layout-compact "
    dir="ltr"
    data-skin="default"
    data-bs-theme="light"
    data-assets-path="<?php echo e(asset('assets/')); ?>"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Administrador JC</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon/favicon.ico')); ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/iconify-icons.css')); ?>" />

    <script src="<?php echo e(asset('assets/vendor/libs/@algolia/autocomplete-js.js')); ?>"></script>

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/node-waves/node-waves.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/pickr/pickr-themes.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/core.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo.css')); ?>" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />

    <!-- endbuild -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/apex-charts/apex-charts.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/swiper/swiper.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/flag-icons.css')); ?>" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/pages/cards-advance.css')); ?>" />

    <!-- Helpers -->
    <script src="<?php echo e(asset('assets/vendor/js/helpers.js')); ?>"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="<?php echo e(asset('assets/vendor/js/template-customizer.js')); ?>"></script> -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
</head>

<body style="background:linear-gradient(90deg, rgba(122, 94, 159, .9) 15%, rgba(49, 70, 145, .85) 51%) !important; color: #fff !important;">
    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="/" class="app-brand auth-cover-brand text-white">
            <span class="app-brand-logo demo">
                <span class="text-primary">
                    <!-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                            fill="currentColor" />
                        <path
                            opacity="0.06"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                            fill="#161616" />
                        <path
                            opacity="0.06"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                            fill="#161616" />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                            fill="currentColor" />
                    </svg> -->
                </span>
            </span>
            <span class="app-brand-text demo fw-bold text-white">Administrador JC</span>
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-xl-flex col-xl-8 p-0">
                <div class="auth-cover-bg d-flex justify-content-center align-items-center">
                    <img
                        src="https://jc-innovation.com/static/media/JC-Congresos-y-convenciones-blanco.122d364de3e071a1757b.png"
                        alt="auth-login-cover"
                        class="my-5 auth-illustration"
                        data-app-light-img="https://jc-innovation.com/static/media/JC-Congresos-y-convenciones-blanco.122d364de3e071a1757b.png"
                        data-app-dark-img="https://jc-innovation.com/static/media/JC-Congresos-y-convenciones-blanco.122d364de3e071a1757b.png" style="visibility: visible!important; width: 100% !important;  padding-left: 20% !important;" || />
                    <!-- <img
                        src="<?php echo e(asset('assets/img/illustrations/bg-shape-image-light.png')); ?>"
                        alt="auth-login-cover"
                        class="platform-bg"
                        data-app-light-img="<?php echo e(asset('assets/img/illustrations/bg-shape-image-light.png')); ?>"
                        data-app-dark-img="<?php echo e(asset('assets/img/illustrations/bg-shape-image-dark.png')); ?>" /> -->
                </div>
            </div>
            <!-- /Left Text -->
            <!-- Login -->
            <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
                <div class="w-px-400 mx-auto mt-12 pt-5">
                    <h4 class="mb-1 text-white">Sistema de Gestión JC</h4>
                    <p class="mb-6 text-white">Por favor, inicie sesión para continuar</p>

                    <form id="formAuthentication" class="mb-6" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-6">
                            <label for="email" class="form-label text-white">Correo Electrónico</label>
                            <input
                                type="email"
                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> text-white"
                                id="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                placeholder="Correo electrónico"
                                required
                                autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-6 form-password-toggle">
                            <label class="form-label text-white" for="password">
                                Contraseña
                            </label>

                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> text-white"
                                    placeholder="********"
                                    required>

                                <span class="input-group-text cursor-pointer">
                                    <i class="icon-base ti tabler-eye-off"></i>
                                </span>

                            </div>

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                        <!-- <div class="my-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-0 ms-2">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember-me">
                                    <label class="form-check-label text-white" for="remember-me"> Remember Me </label>
                                </div>
                                <a href="auth-forgot-password-cover.html">
                                    <p class="mb-0 text-white">Forgot Password?</p>
                                </a>
                            </div>
                        </div> -->
                        <button type="submit" class="btn btn-primary d-grid w-100">
                            Iniciar sesión
                        </button>
                    </form>
                    <!-- 
                    <p class="text-center text-white">
                        <span>New on our platform?</span>
                        <a href="auth-register-cover.html">
                            <span>Create an account</span>
                        </a>
                    </p>

                    <div class="divider my-6">
                        <div class="divider-text">or</div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-facebook me-1_5">
                            <i class="icon-base ti tabler-brand-facebook-filled icon-20px"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-twitter me-1_5">
                            <i class="icon-base ti tabler-brand-twitter-filled icon-20px"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-github me-1_5">
                            <i class="icon-base ti tabler-brand-github-filled icon-20px"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-google-plus">
                            <i class="icon-base ti tabler-brand-google-filled icon-20px"></i>
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js  -->
    <script src="<?php echo e(asset('assets/vendor/libs/jquery/jquery.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/node-waves/node-waves.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/pickr/pickr.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/hammer/hammer.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/libs/i18n/i18n.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/js/menu.js')); ?>"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('assets/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/swiper/swiper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')); ?>"></script>

    <!-- Main JS -->

    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <!-- Page JS -->
    <script src="<?php echo e(asset('assets/js/dashboards-analytics.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\JC-INNOVATION\adminJC\adminJC\resources\views/welcome.blade.php ENDPATH**/ ?>