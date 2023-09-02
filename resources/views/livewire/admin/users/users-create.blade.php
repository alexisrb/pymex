<div class="py-4">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item active">Nuevo Usuario</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-maroon">
            <h5 class="text-center my-2">{{$name}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    {{--Foto--}}
                    <!--<div class="row rounded border  mb-3">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-image"></i></div>
                            </div>
                        </div>
                        {{--<div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Foto</h5>
                            </div>
                            <div class="custom-file mt-3 pt-3">
                                <input type="file" class="custom-file-input" lang="es" wire:model="foto" accept="image/*">
                                <label class="custom-file-label" for="customFileLang">Selecciona una foto</label>
                                @error('foto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                {{-- <div wire:loading wire:target="foto">
                                    <button class="btn btn-white mt-3" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Cargando...
                                    </button>
                                </div> --}}
                                {{-- <div class="pt-3">
                                    @if($foto)
                                        <img class="img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" src="{{$foto->temporaryurl()}}">
                                    @endif
                                </div>
                            </div>
                        </div>--}}
                    </div>-->
                    {{--Pincel--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-blue rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del usuario</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Nombre completo') }}
                                        
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese el nombre">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Apellido Paterno') }}
                                        
                                    </label>
                                    <input type="text" id="apellido_paterno" class="form-control" wire:model="apellido_paterno" placeholder="Ingrese el apellido paterno">
                                    @error('apellido_paterno') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Apellido Materno') }}
                                        
                                    </label>
                                    <input type="text" id="apellido_materno" class="form-control" wire:model="apellido_materno" placeholder="Ingrese el apellido paterno">
                                    @error('apellido_materno') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                {{--<div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Fecha de nacimiento') }}
                                    </label>
                                    <input type="date" id="fecha_de_nacimiento" class="form-control" wire:model="fecha_de_nacimiento" placeholder="Ingrese la fecha de nacimiento">
                                    @error('fecha_de_nacimiento') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>--}}
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo') }}
                                        
                                    </label>
                                    <input type="text" id="email" class="form-control" wire:model="email" placeholder="Ingrese el correo">
                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    {{--Claves Elector--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-blue rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos de la credencial</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Curp') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="curp" class="form-control" wire:model="curp" placeholder="Ingrese su curp">
                                    @error('curp') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Clave Elector') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="clv_electoral" class="form-control" wire:model="clv_electoral" placeholder="Ingrese la clave electoral">
                                    @error('clv_electoral') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Estatus(Vigencia)') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="estatus" class="form-control" wire:model="estatus" placeholder="Ingrese su vigencia">
                                    @error('estatus') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Emisión') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="emision" class="form-control" wire:model="emision" placeholder="Ingrese su emicion">
                                    @error('emision') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="row rounded border mb-4">
                        <div class="bg-blue rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del Municipio</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Estado') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="estado" class="form-control" wire:model="estado" placeholder="Ingrese su estado">
                                    @error('estado') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Municipio') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="municipio" class="form-control" wire:model="municipio" placeholder="Ingrese la municipio">
                                    @error('municipio') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Sección') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="seccion" class="form-control" wire:model="seccion" placeholder="Ingrese su Sección">
                                    @error('seccion') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Distrito') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="distrito" class="form-control" wire:model="distrito" placeholder="Ingrese su distrito">
                                    @error('distrito') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Localidad') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="localidad" class="form-control" wire:model="localidad" placeholder="Ingrese su localidad">
                                    @error('localidad') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row rounded border mb-4">
                        <div class="bg-blue rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Tipo de Usuario') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="tipo" class="form-control" wire:model="tipo" placeholder="Ingrese su tipo de Usuario">
                                    @error('tipo') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Nivel de Estudios') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="nivel_estudio" class="form-control" wire:model="nivel_estudio" placeholder="Ingrese su nivel de estudio">
                                    @error('nivel_estudio') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Agrupacion 1') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="agrupacion1" class="form-control" wire:model="agrupacion1" placeholder="Ingrese la agrupacion a la que corresponde">
                                    @error('agrupacion1') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Agrupacion 2') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="agrupacion2" class="form-control" wire:model="agrupacion2" placeholder="Ingrese la agrupacion a la que corresponde">
                                    @error('agrupacion2') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                                        
                            </div>
                        </div>
                    </div>
                    {{--Rol--}}
                   
                    <div class="row rounded border mb-4">
                        <div class="bg-purple rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa fa-unlock"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Rol</h5>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-form-label">
                                        {{ __('Rol') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="role">
                                        <option value="">Selecciona una opción</option>
                                        
                                    </select>
                                    @error('role') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            {{--<div class="form-group">
                                <div>
                                    <label class="col-form-label">
                                        {{ __('Estatus') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" id="estatus" wire:model="estatus">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo (No se le generará inasistencias)</option>
                                        <option value="Baja definitiva">Baja definitiva (Ya no elabora)</option>
                                    </select>
                                </div>
                                @error('estatus') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>--}}
                        </div>
                    </div>
                    {{--Contaseña--}}
                    <div class="row rounded border">
                        <div class="bg-red rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa fa-key"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Contraseña</h5>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-6 col-sm-6">
                                        <label class="col-form-label">
                                            {{ __('Contraseña') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input id="password" type="password" class="form-control" wire:model="password" required autocomplete="new-password" placeholder="Ingrese la contraseña del empleado">
                                        <span class="password-icon" onclick="togglePasswordVisibility()" style="position: absolute; top: 75%; right: 10px; transform: translateY(-50%); cursor: pointer;" >
                                            <i class="fas fa-eye"></i>
                                        </span> 
                                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

                                    </div>
                                    <div class="form-group col-12 col-md-6 col-sm-6">
                                        <label class="col-form-label">
                                            {{ __('Confirmar contraseña') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input id="passwords" type="password" class="form-control" wire:model="password_confirmation" required autocomplete="new-password" placeholder="Nuevamente ingrese la contraseña del empleado">
                                        <span class="password-icon" onclick="togglePasswordVisibilitys()" style="position: absolute; top: 75%; right: 10px; transform: translateY(-50%); cursor: pointer;" >
                                            <i class="fas fa-eye"></i>
                                        </span> 
                                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" wire:loading.attr="disabled" wire:click.prevent="save()" wire:target="save, foto" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>

@push('css')
    <style>
    .select2 {
        width:100%!important;
    }
    </style>
@endpush

@push('js')
    <script>
        
    </script>
@endpush

<script>
        // JavaScript definido directamente en el archivo Blade
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordIcon = document.querySelector(".password-icon");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    passwordIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordInput.type = "password";
                    passwordIcon.innerHTML = '<i class="fas fa-eye"></i>';
                }
                
        }
        function togglePasswordVisibilitys() {
            var passwordInput = document.getElementById("passwords");
            var passwordIcon = document.querySelector(".password-icon");

                if (passwordInput.type === "passwords") {
                    passwordInput.type = "texts";
                    passwordIcon.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordInput.type = "passwords";
                    passwordIcon.innerHTML = '<i class="fas fa-eye"></i>';
                }
                
        }
        // Agregar otras funciones o lógica aquí
</script>