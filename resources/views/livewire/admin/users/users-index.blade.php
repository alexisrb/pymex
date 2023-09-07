<div class="pt-4">
    <div class="card">
        <div class="card-header bg-green">
        <h5 class="text-center my-2">Todos los Usuarios</h5>
        </div>
        <div class="card-header">
            <div class="row">
                {{--<div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del reclutado">
                    </div>
                </div>--}}
                
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <a type="button" class="btn btn-success" href="{{ route('admin.users.create', $user) }}">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <!--aqui va un if (variable - Count()) -->
            <table class="table table-hover text-center">
                <thead>
                    <tr class="bg-light">
                        <th colspan="2">
                            <span>Ordenar por:</span>
                        </th>
                        <th class="m-2" colspan="21">
                            <select class="form-control form-control-sm text-center" wire:model="order">
                                <option value="1">Ordenar por más reciente (# ID)</option>
                                <option value="2">Ordenar por más antiguo (# ID)</option>
                                <option value="3">Ordenar por número de empleado (Ascedente)</option>
                                <option value="4">Ordenar por número de empleado (Decendente)</option>
                                <option value="5">Ordenar por nombre (A-Z)</option>
                                <option value="6">Ordenar por nombre (Z-A)</option>
                            </select>
                        </th>
                    </tr>
                    <tr class="bg-light">
                        <th>
                            <span>Filtrar por:</span>
                        </th>
                        <th class="m-2">
                            <input wire:model="searchNumero" class="form-control form-control-sm text-center" placeholder="No.">
                        </th>
                        <th class="m-2" colspan="2">
                            <input wire:model="searchName" class="form-control form-control-sm text-center" placeholder="Nombre">
                        </th>
                        <th class="m-2" colspan="2">
                            <input wire:model="searchEstatus" class="form-control form-control-sm text-center" placeholder="Estatus">
                        </th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Número de empleado</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>tipo</th>
                        <th>add</th>
                        <th>add</th>
                        @can('')
                            <th></th>
                        @endcan
                        @can('')
                            <th></th>
                        @endcan
                        @can('')
                            <th></th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @if ($users->count())
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    @isset($user->numero_de_empleado)
                                        {{$user->numero_de_empleado}}
                                    @else
                                        <span class="text-danger">N/A</span>
                                    @endisset
                                </td>
                                <td>
                                    @isset($user->name)
                                        {{$user->name}}
                                    @else
                                        <span class="text-danger">N/A</span>
                                    @endisset
                                </td>
                                <td>
                                    @isset($user->tipo_usuario)
                                        {{$user->tipo_usuario}}
                                    @else
                                        <span class="text-danger">N/A</span>
                                    @endisset
                                </td>
                                <td colspan="4">
                                    @isset($user->estatus)
                                        {{$user->estatus}}
                                    @else
                                        <span class="text-danger">N/A</span>
                                    @endisset
                                </td>
                                @can('admin.users.show')
                                    
                                @endcan
                                @can('admin.users.edit')
                                    
                                @endcan
                                @can('admin.users.destroy')
                                    
                                @endcan
                            </tr>
                        @endforeach
                    @else
                        <tr scope="row">
                            <td colspan="25">
                                <p class="text-center text-danger pt-3"><strong>Sin registro</strong></p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
    </div>
    


</div>