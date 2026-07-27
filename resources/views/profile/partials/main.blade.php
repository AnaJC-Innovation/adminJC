<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
                <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="icon-base ti tabler-users icon-sm me-1_5"></i> Perfil</a>
                    </li>
                </ul>
            </div>
            <div class="card mb-6">
                <!-- Account -->
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('profile.updatesave') }}">
                        @csrf
                        <?php
                        $url = '1.png';
                        if (auth()->user()->photo != '') {
                            $url = auth()->user()->photo;
                        }
                        ?>

                        <div class="d-flex align-items-start align-items-sm-center gap-6">
                            <img
                                src="{{ asset('photos/' . $url) }}"
                                alt="user-avatar"
                                class="d-block w-px-100 h-px-100 rounded"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Subir foto</span>
                                    <i class="icon-base ti tabler-upload d-block d-sm-none"></i>
                                    <input
                                        type="file"
                                        id="upload"
                                        class="account-file-input"
                                        hidden
                                        accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                    <i class="icon-base ti tabler-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reiniciar</span>
                                </button>
                                <div>Permitido JPG, GIF o PNG. Tamaño máximo de 800K</div>
                            </div>
                        </div>
                </div>
                <div class="card-body pt-4">
                    <div class="row gy-4 gx-6 mb-6">
                        <div class="col-md-6 form-control-validation">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input
                                class="form-control"
                                type="text"
                                id="firstName"
                                name="firstName"
                                value="{{auth()->user()->name}}"
                                autofocus />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                class="form-control"
                                type="text"
                                id="email"
                                name="email"
                                value="{{auth()->user()->email}}"
                                placeholder="{{auth()->user()->email}}" />
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input
                                class="form-control"
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Contraseña" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">Guardar</button>
                        <button type="reset" class="btn btn-label-secondary">Cancelar</button>
                    </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <!-- <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-6 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check my-8">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="accountActivation"
                                id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account" disabled>
                            Deactivate Account
                        </button>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
</div>