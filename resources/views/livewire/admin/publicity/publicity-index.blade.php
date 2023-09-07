<div class="pt-4">
    <div class="card">
        <div class="card-header bg-green">
        <h5 class="text-center my-2">Todas las Publicidades</h5>
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
                    <a type="button" class="btn btn-success" href="{{ route('admin.publicity.create', $user) }}">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <!--aqui va un if (variable - Count()) -->
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                       <th>#</th>
                       <th>Alias</th>
                        <th>Yardas / Espectacular</th>
                        <th>Num. Fiscalización</th>
                        <th>Dirección</th>
                        
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
                    @if ($publicities->count())
                        @foreach($publicities as $publicity)
                            <tr>
                                <td>{{$publicity->id}}</td>
                                <td>{{$publicity->alias}}</td>
                                <td>{{$publicity->id_espectacular}}</td>
                                <td>{{$publicity->numero_fiscalizacion}}</td>
                                <td>{{$publicity->direccion}}</td>
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