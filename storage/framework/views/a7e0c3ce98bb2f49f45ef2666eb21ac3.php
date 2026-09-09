<link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />

<link rel="stylesheet" href="../../assets/vendor/css/core.css" />
<link rel="stylesheet" href="../../assets/css/demo.css" />

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp">
    <i class="icon-base ti tabler-plus"></i> Nuevo Administrador
</button>
<!--/  Create App -->
<div class="modal fade" id="createApp" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center">
                    <h4 class="mb-2">Crea un administrador</h4>
                    <p class="mb-5">Ingrese los datos del administrador.</p>
                </div>
                <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
                    <div class="bs-stepper-header border-0 p-1">
                        <div class="step" data-target="#details">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="icon-base ti tabler-file-text icon-md"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title text-uppercase">Datos generales</span>
                                    <span class="bs-stepper-subtitle">Ingrese los datos generales.</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#frameworks">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="icon-base ti tabler-box icon-md"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title text-uppercase">Datos de acceso</span>
                                    <span class="bs-stepper-subtitle">Ingrese los datos de acceso.</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#database">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="icon-base ti tabler-database icon-md"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title text-uppercase">Datos de elearning</span>
                                    <span class="bs-stepper-subtitle">Ingrese los datos de elearning.</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#billing">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="icon-base ti tabler-credit-card icon-md"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title text-uppercase">Datos de app</span>
                                    <span class="bs-stepper-subtitle">Ingrese los datos de la app.</span>
                                </span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#plataforma">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-circle"><i class="icon-base ti tabler-box icon-md"></i></span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title text-uppercase">Datos de la web</span>
                                    <span class="bs-stepper-subtitle">Ingrese los datos de la web.</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content p-1">
                        <form id="formAdministrador" enctype="multipart/form-data">
                            <!-- Details -->
                            <div id="details" class="content pt-4 pt-lg-0">
                                <div class="mb-6">
                                    <label for="exampleInputEmail1" class="form-label">Siglas de cliente</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="cliente"
                                        id="cliente"
                                        placeholder="Application Name" required />
                                </div>
                                <div class="mb-6">
                                    <label for="fileLogo" class="form-label">Logo de cliente</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="fileLogo"
                                        name="fileLogo"
                                        accept="image/*"
                                        placeholder="Logo de cliente" required />
                                </div>
                                <div class="mb-6">
                                    <label for="url" class="form-label">URL de cliente</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="url"
                                        name="url"
                                        placeholder="URL de cliente" required />
                                </div>
                                <div class="mb-6">
                                    <label for="clienteActivo" class="form-label">Cliente Activo</label>
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="clienteActivo"
                                        name="clienteActivo"
                                        placeholder="Cliente Activo" />
                                </div>
                                <div class="col-12 d-flex justify-content-between mt-6">
                                    <button class="btn btn-label-secondary btn-prev" disabled>
                                        <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                    </button>
                                    <button class="btn btn-primary btn-next" type="button">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-2">Siguiente</span>
                                        <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Frameworks -->
                            <div id="frameworks" class="content pt-4 pt-lg-0">
                                <h5>Datos de acceso</h5>
                                <div class="mb-6">
                                    <label for="exampleInputEmail2" class="form-label">Correo electrónico</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Nombre de usuario" required />
                                </div>
                                <div class="mb-6">
                                    <label for="contrasenia" class="form-label">Contraseña</label>
                                    <input
                                        type="password"
                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> text-white"
                                        id="contrasenia"
                                        name="password"
                                        placeholder="Contraseña" required />
                                    <span class="input-group-text cursor-pointer">
                                        <i class="icon-base ti tabler-eye-off"></i>
                                    </span>
                                </div>
                                <div class="col-12 d-flex justify-content-between mt-6">
                                    <button class="btn btn-label-secondary btn-prev">
                                        <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                    </button>
                                    <button class="btn btn-primary btn-next" type="button">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-2">Siguiente</span>
                                        <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Database -->
                            <div id="database" class="content pt-4 pt-lg-0">
                                <h5>Datos de elearning</h5>

                                <div class="form-check form-switch mb-6">
                                    <input class="form-check-input"
                                        type="checkbox"
                                        role="switch"
                                        id="activoElearning"
                                        checked>
                                    <label class="form-check-label" for="activoElearning">
                                        ¿Se encuentra activo?
                                    </label>
                                </div>

                                <!-- Campos que dependen del switch -->
                                <div id="datosElearning">
                                    <div class="mb-6">
                                        <label for="urlElearning" class="form-label">URL de elearning</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="urlElearning"
                                            name="urlElearning"
                                            placeholder="URL de elearning">
                                    </div>
                                    <div class="mb-6">
                                        <label for="detallesElearning" class="form-label">Detalles</label>
                                        <textarea
                                            class="form-control"
                                            id="detallesElearning"
                                            name="detallesElearning"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="mb-6">
                                        <label for="checklistElearning" class="form-label">Checklist</label>
                                        <textarea
                                            class="form-control"
                                            id="checklistElearning"
                                            rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between mt-6">
                                    <button type="button" class="btn btn-label-secondary btn-prev">
                                        Anterior
                                    </button>

                                    <button type="button" class="btn btn-primary btn-next">
                                        Siguiente
                                    </button>
                                </div>
                            </div>

                            <!-- billing -->
                            <div id="billing" class="content">
                                <h5 class="mb-6">Datos de app</h5>
                                <div id="AppNewCCFormApp" class="row g-6 pt-3 pt-lg-0 mb-6" onsubmit="return false">
                                    <div class="form-check form-switch mb-6">
                                        <input class="form-check-input"
                                            type="checkbox"
                                            role="switch"
                                            id="activoApp"
                                            name="activoApp"
                                            checked>
                                        <label class="form-check-label" for="activoApp">
                                            ¿Se encuentra activo la app?
                                        </label>
                                    </div>
                                    <div id="datosApp">
                                        <div class="mb-6">
                                            <label for="detalles" class="form-label">Detalles</label>
                                            <textarea
                                                class="form-control"
                                                id="detallesApp"
                                                name="detallesApp"
                                                placeholder="Detalles de App"
                                                rows="3"></textarea>
                                        </div>
                                        <div class="mb-6">
                                            <label for="checklist" class="form-label">Checklist</label>
                                            <textarea
                                                class="form-control"
                                                id="checklistApp"
                                                name="checklistApp"
                                                placeholder="Checklist de elearning"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between mt-6">
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                        </button>
                                        <button class="btn btn-primary btn-next" type="button">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Siguiente</span>
                                            <i class="icon-base ti tabler-arrow-right icon-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- plataforma -->
                            <div id="plataforma" class="content">
                                <h5 class="mb-6">Datos de la plataforma</h5>
                                <div id="AppNewCCFormPlataforma" class="row g-6 pt-3 pt-lg-0 mb-6" onsubmit="return false">
                                    <div class="form-check form-switch mb-6">
                                        <input class="form-check-input"
                                            type="checkbox"
                                            role="switch"
                                            id="activoPlataforma"
                                            name="activoPlataforma"
                                            checked>
                                        <label class="form-check-label" for="activoPlataforma">
                                            ¿Se encuentra activo la app?
                                        </label>
                                    </div>
                                    <div id="datosPlataforma">
                                        <div class="mb-6">
                                            <label for="detalles" class="form-label">Detalles de la plataforma</label>
                                            <textarea
                                                class="form-control"
                                                id="detallesPlataforma"
                                                name="detallesPlataforma"
                                                placeholder="Detalles de la plataforma"
                                                rows="3"></textarea>
                                        </div>
                                        <div class="mb-6">
                                            <label for="checklist" class="form-label">Checklist de la plataforma</label>
                                            <textarea
                                                class="form-control"
                                                id="checklistPlataforma"
                                                name="checklistPlataforma"
                                                placeholder="Checklist de la plataforma"
                                                rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between mt-6">
                                    <button class="btn btn-label-secondary btn-prev">
                                        <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                    </button>
                                    <button
                                        class="btn btn-success btn-submit"
                                        type="submit">
                                        <span class="align-middle">Guardar</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminJC\resources\views/layouts/addAdministrador.blade.php ENDPATH**/ ?>