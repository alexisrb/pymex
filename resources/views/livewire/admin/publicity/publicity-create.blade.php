<div class="py-4">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item active">Nuevo Padron Electoral</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-maroon">
            <h5 class="text-center my-2">{{$alias}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    <div class="row rounded border  mb-3">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-image"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">FOTO DE LA YARDA / ESPECTACULAR</h5>
                            </div>
                            <div class="custom-file mt-3 pt-3">
                                <input type="file" class="custom-file-input" lang="es" wire:model="foto" accept="image/*">
                                <label class="custom-file-label" for="customFileLang">Selecciona una foto</label>
                                @error('foto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                {{-- <div wire:target="foto" wire:loading>
                                    <button class="btn btn-white mt-3" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Cargando...
                                    </button>
                                </div> --}}
                                <div class="pt-3">
                                    @if($foto)
                                        {{-- <img class="img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" src="{{$foto->temporaryurl()}}"> --}}
                                    @else
                                        @isset($user->image)
                                            <img class="img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" src="{{route('images', $user->image)}}">
                                        @endisset
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Pincel--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-success rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos de la Yarda / Espetacular</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('ID DE LA BARDA /  ESPECTACULAR') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" id="id" class="form-control" wire:model="id" placeholder="Ingrese el número de barda">
                                    @error('id') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('NUMERO DE FISCALIZACIÓN') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" id="id_fiscal" class="form-control" wire:model="id_fiscal" placeholder="Ingrese el número de Fiscalización">
                                    @error('id_fiscal') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <label class="col-form-label">
                                        {{ __('ALIAS') }}
                                        
                                    </label>
                                    <input type="text" id="alias" class="form-control" wire:model="alias" placeholder="Ingrese el alias">
                                    @error('alias') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6 col-sm-6">
                                    <div>
                                        <label class="col-form-label">
                                            {{ __('TIPO') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" id="tipo" wire:model="tipo">
                                            <option value="">Selecciona una opción</option>
                                            <option>Barda</option>
                                            <option>Espectacular</option>
                                        </select>
                                    </div>
                                    @error('tipo') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <div wire:ignore>
                                        <label class="col-form-label">
                                            {{ __('Responsable') }}
                                        </label>
                                        <select class="form-control" id="users" wire:model="responsable">
                                            <option value="">Selecciona una opción</option>
                                            @foreach($users as $responsable)
                                                <option value="{{ $responsable->id}}">{{ $responsable->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('responsable') <span class="text-danger error">{{ $message }}</span>@enderror
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
                        <div class="form-group col-12 col-md-6 col-sm-6">
                            <label class="col-form-label">
                                {{ __('COORDENADA GOOGLE') }}
                                
                            </label>
                            <input type="text" id="cordenada" class="form-control" wire:model="cordenada" placeholder="Ingrese la cordenada">
                            @error('cordenada') <span class="text-danger error">{{ $message }}</span>@enderror
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
                                <h5 class="py-1 text-center">Datos de la Dirección</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('DIRECCIÓN') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="direccion" class="form-control" wire:model="direccion" placeholder="Ingrese la dirección">
                                    @error('direccion') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('COLONIA') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="colonia" class="form-control" wire:model="colonia" placeholder="Ingrese la colonia">
                                    @error('colonia') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('CIUDAD') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="ciudad" class="form-control" wire:model="ciudad" placeholder="Ingrese la ciudad">
                                    @error('ciudad') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('ESTADO') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="estado" class="form-control" wire:model="estado" placeholder="Ingrese el estado">
                                    @error('estado') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    {{--<div class="row rounded border mb-4">
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
                    </div>--}}
                    
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