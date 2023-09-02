<div class="py-4">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item active">Nuevo Usuario Integrado al Padron Electoral</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-primary">
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
                                        {{ __('Nombre ') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese el nombre">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Apellido Paterno') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese el apellido">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Apellido Materno') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese el apellido">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Sexo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="sexo" class="form-control" wire:model="name" placeholder="Ingrese el apellido">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Lugar de Nacimiento') }}
                                        
                                    </label>
                                    <input type="text" id="correo" class="form-control" wire:model="email" placeholder="Ingrese el correo">
                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Fecha de nacimiento') }}
                                    </label>
                                    <input type="date" id="fecha_de_nacimiento" class="form-control" wire:model="fecha_de_nacimiento" placeholder="Ingrese la fecha de nacimiento">
                                    @error('fecha_de_nacimiento') <span class="text-danger error">{{ $message }}</span>@enderror
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
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Clave Elector') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese la clave">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Estatus(Vigencia)') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Emicion') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    {{--Datos de localidad--}}
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
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Municipio') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese la clave">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Seccion') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Distrito') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Dist. Federal') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Localidad') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                
                            </div>
                        </div>
                    </div> 
                    {{--Tipo de Usuarios--}}
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
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Nivel de Estudios') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese la clave">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Agrupacion 1') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('Agrupacion 2') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="name" placeholder="Ingrese su curp">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
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
                <button type="button" wire:loading.attr="disabled" wire:click.prevent="save()" wire:target="save, foto, documento_de_identificación_oficial, documento_del_comprobante_de_domicilio, documento_de_no_antecedentes_penales, documento_de_la_licencia_de_conducir, documento_de_la_cedula_profesional, documento_de_la_carta_de_pasante, documento_del_curriculum_vitae" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>