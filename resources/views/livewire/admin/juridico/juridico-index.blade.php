<div class="pt-4">
    <div class="card">
        <div class="card-header bg-green">
        <h5 class="text-center my-2">Juridico</h5>
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
                    <a type="button" class="btn btn-success" href="{{ route('admin.juridico.create', $user) }}">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <!--aqui va un if (variable - Count()) -->
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                       {{-- <th>#</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>tipo</th>
                        <th>add</th>
                        <th>add</th>  --}}  
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
                    
                </tbody>
            </table>
        <!--else-->
            <div class="my-5">
                <p class="text-center text-danger"><strong>Sin registro</strong></p>
            </div>
        <!--endif-->
    </div>
    


</div>